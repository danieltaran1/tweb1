<?php 
session_start(); 

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cs2";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM inventory WHERE user_id = '$user_id' ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body class="px-30">
    
    <?php include 'header.php'; ?>
    
    <main class="min-h-[50vh] py-10">
        <section>
            <div class="font-bold text-4xl text-slate-800 mb-8 border-b pb-4">
                Inventory <span class="text-xl text-slate-500 font-normal ml-2">(<?php echo $result->num_rows; ?> items)</span>
            </div>
            
            <?php if ($result->num_rows > 0): ?>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <?php while($row = $result->fetch_assoc()): ?>
                        <div class="flex flex-col justify-between items-center p-4 bg-slate-50 rounded-2xl border border-slate-200 hover:border-blue-400 hover:scale-105 transition cursor-pointer shadow-sm h-40">
                            <img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="Skin" class="h-20 object-contain drop-shadow-md">
                            <div class="font-bold text-xs text-center text-slate-700 mt-2">
                                <?php echo htmlspecialchars($row['skin_name']); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <div class="text-center text-slate-500 py-10 text-lg">
                    Your inventory is empty. Go open some cases!
                </div>
            <?php endif; ?>

        </section>
    </main>
    

    <footer>
        <section>
            <div class="">
                <hr class="border-t border-slate-500 my-8">
            </div>
            <div class="flex flex-row justify-between p-10 gap-20">
                <div class="flex flex-col ">
                    <div class="font-extrabold text-3xl flex flex-row">
                        <div class="flex justify-center items-center px-2 ">
                            <img class="w-10 rounded-md" src="img/cslogo.png" alt="">
                        </div>
                        <div><a href="index.php">CS2-foryou</a></div>
                    </div>
                    <div>The ultimate free CS2 case simulator</div>
                </div>

                <div class="flex flex-col ">
                    <div class="font-bold">Cases</div>
                    <div class="flex flex-col">
                        <div><a class="hover:underline" href="opencase.html">Chrome 2</a></div>
                        <div><a class="hover:underline" href="opencase.html">Dangerzone</a></div>
                        <div><a class="hover:underline" href="opencase.html">Hydra</a></div>
                        <div><a class="hover:underline" href="opencase.html">Fracture</a></div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="font-bold">Support</div>
                    <div class="flex flex-col">
                        <div><a class="hover:underline" href="faq.html">FAQ</a></div>
                        <div><a class="hover:underline" href="contacts.html">Contacs</a></div>
                        <div><a class="hover:underline" href="about.html">About</a></div>
                    </div>
                </div>

                <div class="flex flex-raw gap-5">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="hover:cursor-pointer hover:scale-125">
                            <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932 6.064-6.932zm-1.292 19.49h2.039L6.486 3.24H4.298l13.311 17.403z"/>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="hover:cursor-pointer hover:scale-125">
                            <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037 19.736 19.736 0 0 0-4.885 1.515.069.069 0 0 0-.032.027C.533 9.048-.32 13.572.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="hover:cursor-pointer hover:scale-125">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.06-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.9-.32-1.98-.23-2.81.33-.85.51-1.44 1.43-1.58 2.41-.16 1.02.13 2.12.8 2.93.59.76 1.48 1.25 2.45 1.35.91.1 1.86-.14 2.59-.7.76-.53 1.25-1.38 1.34-2.31.11-2.48.03-4.96.04-7.44.02-3.34.01-6.68.01-10.02z"/>
                        </svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="hover:cursor-pointer hover:scale-125">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-6 pb-8">
            <p class="text-center text-slate-400 text-xs tracking-wide">
                &copy; 2026 CS2-foryou. Not affiliated with Valve Corp. 
            </p>
            </div>
        </section>
    </footer>
</body>
</html>
<?php 
$conn->close(); 
?>