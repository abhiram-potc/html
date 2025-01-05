<?php
session_start();
include '../header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orthopedics</title>
    <link rel="stylesheet" href="../nav.css">
</head>
<body>

    <?php
    include '../doctors/dr3.html';
    include 'orthopedics.html'; 
    ?>

</body>
</html>

<?php
include '../footer.php';
?>