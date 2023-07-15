<?php
    // Declare variables for connection
    $database = 'final project';
    $username = 'root';
    $password = '';
    $host = 'localhost';
    
    // Create connection using object-oriented style
    $conn = new mysqli($host, $username, $password, $database);

    // Create conection using procedural style
    //$conn = mysqli_connect($host, $username, $password, $database);

    // Create connection using PDO
    //$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Check connection status
    if ($conn->connect_error) {
        // If connection failed, display error message and exit
        die("Connection failed: " . $conn->connect_error);
    }
?>