<?php
$db = mysqli_connect('localhost', 'root', '', 'posts');

//check if connected
if (!$db) {
    die('Unable to connect to the database. Check your connection parameters');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the input values
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Create the users table if it doesn't exist
    $table = 'users';
    $createTable = "CREATE TABLE IF NOT EXISTS $table (
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";
    mysqli_query($db, $createTable);

    
    $insert = "INSERT INTO $table (username, password) VALUES ('$username', '$hash')";
    mysqli_query($db, $insert);

    
    header('Location: login.php'); //if succesfully made account, go to login page to login
    exit();
}
?>

<html>

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="choosestyle.css">
</head>

<body>
    <div class="logo">
        <img src="images/Dreamybook.png" class="Logo">
    </div>
    <div class="choose">
        <form method="POST" action="newacc.php"> <!--to submit form on same file --->
            <input type="text" placeholder="Create New Username" class="textbox" name="username" required>
            <input type="password" placeholder="Create New Password" class="textbox" name="password" required > 
            <button class="button">Create Account</button>
        </form>
    </div>
</body>

</html>