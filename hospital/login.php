<?php
session_start();
require 'connection.php';

if (isset($_POST['login']))
{
    $credit = $_POST['credit'];
    $pass = $_POST['password'];
    $password = md5($pass);
    $qry = "SELECT user_id, username FROM login INNER JOIN user ON user.id = login.user_id WHERE (phone = '$credit' OR email = '$credit') AND password = '$password'";
    // echo "hi";
    $exe = mysqli_query($conn, $qry);
    
    if (!$exe)
    {
        echo "Error executing query: " . mysqli_error($conn);
    }
    else
    {
        if (mysqli_num_rows($exe) > 0)
        {
            $rr = mysqli_fetch_assoc($exe);
            $user_id = $rr['user_id'];
            $user_name = $rr['username'];

            setcookie("user_id",$user_id);
            setcookie("user_name",$user_name);
            setcookie("logined",1);
            echo "<script>alert('Successfully signed in');
            window.location.href='user/userhome.php';</script>";
        }
        else
        {
            echo "<script>alert('Invalid credentials. Please try again.');</script>";
        }
    }
}

mysqli_close($conn);
?>