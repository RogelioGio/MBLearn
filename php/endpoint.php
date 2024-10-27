<?php
header("Access-Control-Allow-Origin: *");  // Allow all origins (CORS policy)
header("Content-Type: application/json");  // Set content type to JSON

// Mock data that will be returned as JSON
$data = [
    "status" => "success",
    "message" => "Hello from PHP API",
    "data" => [
        "id" => 1,
        "name" => "Example",
        "description" => "This is a sample data from PHP"
    ]
];

// Encode data as JSON and send it
echo json_encode($data);
?>