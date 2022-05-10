<?php
session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'php_myForms_db';

$conn = mysqli_connect($host, $username, $password, $dbName);
if(!$conn) echo "Connection error";

$user_id = 0;

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) $user_id = $_SESSION['user_id'];


function validateInput($value)
{
    global $conn;
    // htmlentities() to return stripslash of an html code
    $value = htmlspecialchars($value);
    return mysqli_real_escape_string($conn, trim($value));
}
function returnWithNavigation($message,$redirectLocation){
    exit ("
    <script>
        alert('$message!');
        window.location = '$redirectLocation';
    </script>
    ");
}

function returnNavigationOnly($redirectLocation)
{
    exit ("
    <script>
        window.location = '$redirectLocation';
    </script>
    ");
}