<?php
require 'connection.php';

if (isset($_POST['register'])) 
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $re_pass = $_POST['re_pass'];
    $qry = "SELECT * FROM login WHERE phone = '$phone'";
    if (mysqli_query($conn, $qry))
    {
        echo "<script> alert('Already registered');
        window.location.href= 'index.html';</script>";
    }
    else
    {
        if ($pass !== $re_pass) 
        {
            die("Passwords do not match.");
        }

        $password = md5($pass);

        $query = "INSERT INTO user (username, age, address) VALUES ('$name', $age, '$address')";
        if (mysqli_query($conn, $query)) 
        {
            $user_id = mysqli_insert_id($conn);

            $query = "INSERT INTO login (user_id, email, password, phone) VALUES ($user_id, '$email', '$password', '$phone')";
            if (mysqli_query($conn, $query)) 
            {
                echo "<script> alert('Registration successful!');
                window.location.href= 'login.html';</script>";
            } 
            else 
            {
                echo "Error: Could not register user credentials. " . mysqli_error($conn);
            }
        } 
        else 
        {
            echo "Error: Could not register user. " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>