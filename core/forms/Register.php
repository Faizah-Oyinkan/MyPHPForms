<?php

include '../dbconnect.php';
if(isset($_POST['submit_button'])){
    $username = validateInput($_POST['username']);   
    $password = validateInput($_POST['password']);
    $email =validateInput ($_POST['email']);
    $confirm_password = validateInput($_POST['confirm_password']);

    
    if(empty($username) || empty($email) || empty($password) || empty($confirm_password)){
        returnWithNavigation('Please fill out all fields', '../../register.php');
    }
    if($password <> $confirm_password){
        returnWithNavigation('your password confirmation is incorrect', '../../register.php');
    }
    $password = md5($password);

    
    $statement = "INSERT INTO users (username, email, `password`) values ('$username', '$email', '$password')";

    $query = mysqli_query($conn, $statement);

    if($query) returnWithNavigation('User registration failed!', '../../register.php');
    
    returnWithNavigation('User registered successfully!', '../../register.php');


}













?>