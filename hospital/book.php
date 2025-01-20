<?php
include 'connection.php';
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{
    $key=$_COOKIE['lkey'];
    if (isset($_POST['register'])) 
    {
        $department = trim($_POST['department']);
        $date = trim($_POST['date']);
        $time = trim($_POST['time']);
        // $token = $trim($_POST['token']);
    }
}
else
{
    Header("location:login.html");
}
?>