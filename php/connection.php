<?php

// Database Credentials
$host = 'ep-rapid-shape-a11pmwlv.ap-southeast-1.aws.neon.tech'; // e.g., 'yourdb.neon.tech'
$port = '5432'; // Default PostgreSQL port
$dbname = 'test'; // Your database name
$user = 'test_owner'; // Your database username
$password = '6MPYa0XfNdpS'; // Your database password

try {
    $endpoint_id = 'ep-rapid-shape-a11pmwlv';

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;options='endpoint=$endpoint_id';sslmode=require";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch associative arrays by default
    ];

    $pdo = new PDO($dsn, $user, $password, $options);
    echo "Connected successfully to Neon database!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>