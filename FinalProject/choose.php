<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['newacc'])) {
        header('Location: newacc.php');
        exit();
    } elseif (isset($_POST['login'])) {
        header('Location: login.php');
        exit();
    }
}
?>

<html>

<head>
    <title>Login or Sign up?</title>
    <link rel="stylesheet" href="choosestyle.css">
</head>

<body>
    <div class="logo">
        <img src="images/Dreamybook.png" class="Logo">
    </div>
    <div class="choose">
        <form method="POST" action="">
            <button class="button" name="newacc">Create New Account</button>
            <button class="button" name="login">Log In</button>
        </form>
    </div>
</body>

</html>