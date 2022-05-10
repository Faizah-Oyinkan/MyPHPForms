<?php
include '../dbconnect.php';

extract($_POST);

if(isset($login_button)){
    $email = validateInput($email);
    $password = validateInput($password);

    if(empty($email || empty($password))){
        returnWithNavigation('please fill out all  blanks', '../../');
    }
    $statement = "SELECT * FROM users where email = '$email'"; 
    $query = mysqli_query($conn, $statement);
    $data = mysqli_fetch_array($query);
    
    if(!$data) returnWithNavigation('Account does not exist', '../../');
    $password = md5($password);
    if($password <> $data['password']) returnWithNavigation('password incorrect', '../../');
    $_SESSION['user_id'] = $data['id'];
    returnWithNavigation('login successful', '../../dashboard.php');
    
}