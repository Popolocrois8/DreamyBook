<?php

$db = mysqli_connect('localhost', 'root', '', 'posts');

//check if connected
if (!$db) {
    die('Unable to connect to the database. Check your connection parameters');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    //get the password
    $query = "SELECT password FROM users WHERE username = '$username'"; //get passwd from users table that have username same as entered username
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    $hash= $row['password'];

    if (password_verify($password, $hash)) 
    {
        header('Location: mainpage.php');
        exit();
    }
    else
    {
        "Invalid Username or Password";
    } 
}

?>

<html>

<head>
    <title>Login </title>
    <link rel="stylesheet" href="choosestyle.css">
</head>

<body>
    <div class="logo">
        <img src="images/Dreamybook.png" class="Logo">
    </div>
    <div class="choose">
        <form method="POST" action="login.php">
            <input type="text" placeholder="Enter Username" class="textbox" name="username" required>
            <input type="password" placeholder="Enter Password" class="textbox" name="password" required> 
            <button class="button">Login</button>
        </form>
    </div>
</body>

</html>