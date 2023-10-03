<?php

include 'db_connection.php';

session_start();

if($_SESSION["valid"] != true){
    header("location: index.php");
}

$users_id = $_SESSION['users_id'];

if(!isset($users_id)){
   header('location:index.php');
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dstyle.css">
    <script src="https://kit.fontawesome.com/1d060ef8c3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header">
        <a href="#">
            <img src="logo.png" alt="Logo">
        </a>
        <nav>
            <ul>
                <li id="signoff"><a href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
            </ul>
        </nav>
    </div>
    <div class="sidebar">
        <input type="checkbox" id="sidebar-toggle" class="sidebar-toggle">
        <label for="sidebar-toggle" class="toggle-label">
            <i class="fas fa-bars"></i>
        </label>
        <div class="sidebar-options">
            <div class="sidebar-item">Dashboard</div>
            <div class="sidebar-item">Record</div>
            <div class="sidebar-item">Chart</div>
            <div class="sidebar-item">Account</div>
        </div>
    </div>
    <script>
        var signoffItem = document.getElementById("signoff");

        signoffItem.addEventListener("click", function (event) {

            event.preventDefault();
            window.location.href = "index.php";
        });
    </script>


</body>

</html>