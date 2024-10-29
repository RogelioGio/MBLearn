<?php
print_r(PDO::getAvailableDrivers());
// Database Credentials
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$endpoint_id = getenv('ENDPOINT_ID');

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