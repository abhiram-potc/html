<?php
    $host = 'localhost'; 
    $username = 'root';
    $password = '';
    $database = 'hospital';
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn)
    {
        echo "<script>alert('Connection failed')</script>";
    }
?>