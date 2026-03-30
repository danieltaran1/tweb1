<?php
session_start();
header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "cs2");

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['name'], $data['img'], $data['rarity']) && isset($_SESSION['id'])) {
    
    $user_id = $_SESSION['id'];
    $skin_name = $conn->real_escape_string($data['name']);
    $image_path = $conn->real_escape_string($data['img']);
    $rarity = strtolower($data['rarity']); 

    $prices = [
        'milspec'    => 0.50,
        'restricted' => 2.00,
        'classified' => 10.00,
        'covert'     => 50.00,
        'gold'       => 500.00
    ];

    $reward = isset($prices[$rarity]) ? $prices[$rarity] : 0.10;

    $sql_inv = "INSERT INTO inventory (user_id, skin_name, image_path) VALUES ('$user_id', '$skin_name', '$image_path')";
    $conn->query($sql_inv);

    $sql_bal = "UPDATE users SET balance = balance + $reward WHERE id = '$user_id'";

    if ($conn->query($sql_bal) === TRUE) {
        $_SESSION['balance'] += $reward;

        echo json_encode([
            'status' => 'success', 
            'new_balance' => number_format($_SESSION['balance'], 2)
        ]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Eroare SQL: ' . $conn->error]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Date insuficiente sau sesiune expirata!']);
}
$conn->close();