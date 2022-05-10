<?php
 include './core/dbconnect.php';
 if(isset($_SESSION['uder_id']) && !empty($_SESSION['user_id'])){
     header('location: dashboard.php');
 }



 ?>






<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">



    <script src="./assets/js/bootstrap.bundle.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/main.js"></script>
</head>
<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="navbar-brand">
            <h1 class="bg-primary text-white w-50">Facebook</h1>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Login Here</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Register.php">Register Here</a>
                </li>
            </ul>
        </nav>
 
   
    </header>
    <main class="container-fluid mt-5">