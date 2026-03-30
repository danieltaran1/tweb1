<?php
session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cs2";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_nickname = $_POST['nickname'];
    $user_password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE nickname = '$user_nickname'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($user_password, $row['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['nickname'] = $row['nickname'];
            $_SESSION['balance'] = $row['balance'];
            
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php?error=wrong_pass");
            exit();
        }
    } else {
        header("Location: login.php?error=user_not_found");
        exit();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="./src/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="px-30 relative">
    
    <div id="toast-container" class="fixed top-5 right-5 z-[100]"></div>

    <?php include 'header.php'; ?>

    <main>
        <div class="flex justify-center p-10">
            <div class="relative flex items-center justify-center w-full max-w-sm min-h-[520px] bg-sky-100 rounded-[2.5rem] shadow-sm border border-sky-200 p-6 overflow-hidden">
                <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#000_1px,transparent_1px)] [background-size:16px_16px]"></div>

                <div class="relative w-full max-w-[300px] bg-white rounded-3xl shadow-xl p-6 sm:p-8 flex flex-col z-15">
                    <div class="font-bold text-2xl text-[#1e3a8a] flex justify-center pb-6">
                        Login
                    </div>

                    <form action="login.php" method="POST" class="flex flex-col space-y-4 w-full">
                        <div class="flex flex-col">
                            <label for="nickname" class="text-sm font-semibold text-slate-600 mb-1 ml-1">Nickname</label>
                            <input id="nickname" type="text" name="nickname" placeholder="Enter Nickname" required class="block w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 placeholder:text-slate-400 focus:border-[#1e3a8a] focus:outline-none focus:ring-1 focus:ring-[#1e3a8a] transition-colors shadow-sm" />
                        </div>

                        <div class="flex flex-col">
                            <label for="password" class="text-sm font-semibold text-slate-600 mb-1 ml-1">Password</label>
                            <div class="relative">
                                <input id="password" type="password" name="password" placeholder="Enter Password" required 
                                    class="block w-full rounded-lg border border-slate-300 bg-white px-3 py-2 pr-12 text-sm text-slate-800 placeholder:text-slate-400 focus:border-[#1e3a8a] focus:outline-none focus:ring-1 focus:ring-[#1e3a8a] transition-colors shadow-sm" />
                                
                                <span id="toggle-password"
                                    class="absolute right-3 top-0 h-full flex items-center cursor-pointer text-slate-400 text-xs select-none hover:text-slate-600">
                                    Show
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-col justify-center items-center pt-2 pb-4 space-y-1">
                            <div class="text-xs text-slate-500">Don't have an account?</div>
                            <a href="register.php" class="text-sm font-semibold text-[#1e3a8a] hover:text-blue-900 hover:underline">Register</a>
                        </div>
                            
                        <div class="flex justify-center w-full mt-2">
                            <button type="submit" class="w-full bg-[#1e3a8a] hover:bg-blue-900 py-2.5 rounded-lg text-white font-bold cursor-pointer transition-colors text-sm shadow-md">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <div id="toast-container" class="fixed top-5 right-5 z-50 flex flex-col gap-2"></div>

    <script src="notifications.js"></script>
    <script src="login.js"></script>
</body>
</html>