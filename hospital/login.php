<?php
    require 'connection.php';
    if(isset($_POST['login']))
    {
        $credit=$_POST['credit'];
        $pass=$_POST['password'];
        $password=md5($pass);
        $qry="select * from login where (phone = '$credit' or email='$credit') and password = '$password'";
        $exe=mysqli_query($conn, $qry);
        if(!$exe)
        {
            echo "Error executing query: " . mysqli_error($conn);
        }
        else
        {
            if (mysqli_num_rows($exe) > 0) 
            {
                echo "<script>alert('Login successful!')</script>";
                header("Location: home.html");
                exit()
            } 
            else 
            {
                echo "<script>alert('Invalid credentials')</script>";
                header("Location: login.html");
                exit();
            }
        }
    }
?>