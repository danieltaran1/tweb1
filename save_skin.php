<?php
session_start();
header('Content-Type: application/json');

// 1. Verificăm dacă ești logat
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo json_encode(['status' => 'error', 'message' => 'Eroare: Nu ești logat!']);
    exit();
}

$data = json_decode(file_get_contents('php://input'), true);

// 2. Verificăm dacă JavaScript-ul a trimis corect numele și poza
if (isset($data['name']) && isset($data['img'])) {
    
    $conn = new mysqli("localhost", "root", "", "cs2");
    
    // 3. Verificăm conexiunea la baza de date
    if ($conn->connect_error) {
        echo json_encode(['status' => 'error', 'message' => 'Eroare bază de date: ' . $conn->connect_error]);
        exit();
    }
    
    $user_id = $_SESSION['id'];
    $skin_name = $conn->real_escape_string($data['name']);
    $image_path = $conn->real_escape_string($data['img']);
    
    $sql = "INSERT INTO inventory (user_id, skin_name, image_path) VALUES ('$user_id', '$skin_name', '$image_path')";
    
    // 4. Verificăm dacă a reușit să bage skin-ul în tabel
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'message' => 'Skin salvat cu succes în baza de date!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Eroare SQL: ' . $conn->error]);
    }
    
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Eroare: JS nu a trimis datele corect!']);
}
?>