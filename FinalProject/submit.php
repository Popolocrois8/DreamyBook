<?php

$db = mysqli_connect('localhost', 'root', '','posts'); //if username and password is set, doesnt work(?)

// check if connected
if (!$db) {
    die('Unable to connect to the database. Check your connection parameters');
}

//to create if doesnt exists
$database = 'posts';
mysqli_query($db, "CREATE DATABASE IF NOT EXISTS $database");
mysqli_select_db($db, $database);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the textarea input
    $message = $_POST['message'];

    // Create the messages table if it doesn't exist
    $table = 'messages';
    $createTable = "CREATE TABLE IF NOT EXISTS $table (
id INT PRIMARY KEY AUTO_INCREMENT,
content TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
)";
    mysqli_query($db, $createTable);

    // store in database
    $insertQuery = "INSERT INTO $table (content) VALUES ('$message')";
    mysqli_query($db, $insertQuery);

    // Redirect back to the main page or display a success message
    header('Location: mainpage.php');
    exit();
}

?>