<?php

ob_start();

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <a href="#">
            <img src="logo.png" alt="Expense Tracker Logo">
        </a>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
    </div>

    <div class="background">
        <div class="content">
            <h1>Login</h1>
            <form method="post" action="login.php">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" value="Login">
            </form>
            <p class="registerlogin-text">Don't have an account? <a href="register.html">Register here</a></p>
        </div>
    </div>
</body>

</html>
<!-- Copyright of this code belongs to Milan Bhattarai.Thank you! -->
<!-- Copyright of this code belongs to Milan Bhattarai.Thank you! -->