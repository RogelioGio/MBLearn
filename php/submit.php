<?php
include 'connection.php';

$name = $_POST['name'];
$pass = $_POST['password'];

try {
    // Prepare the SQL query with placeholders
    $stmt = $pdo->prepare("INSERT INTO test_user (name, password) VALUES (:name, :password)");
    
    // Execute the query with an array of parameters
    $stmt->execute([':name' => $name, ':password' => $pass]);
    
    echo "New record created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>