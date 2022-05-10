<?php 
    global $page; 
    include './core/dbconnect.php';
    if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
        header('location: ./');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>

    <link rel="short icon" href="/favicon.ico">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="./assets/css/main.css">
     <link rel="stylesheet" href="./assets/font-awesome/css/fontawesome/css">
     <link rel="stylesheet" href="./assets/font-awesome/css/fa-solid.css">


</head>
<body>
     <nav>
          
         <ul class="nav nav-pills nav-fill bg-danger ">
             <li class="nav-item">
                 <a class="nav-link active <?=$page=='dashboard'?'bg-white text-dark':'bg-primary text-white';?>" href="./dashboard.php">Messages</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?=$page=='friends'?'bg-white text-dark':'bg-primary text-white';?>" href="./friend_list.php">Friend list</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?=$page=='messages'?'bg-white text-dark':'bg-primary text-white';?>" href="./all_messages.php">All messages</a>
             </li>
         </ul>
  </nav>
     <div class="form-group">
        <a 
            href="./logout.php" class="float-end btn btn-danger"
            onclick="confirm('Are you sure you want to logout?') || event.preventDefault();"
        >
            <i class="fa fa-sign-out"></i> Log Out
        </a>
     </div>