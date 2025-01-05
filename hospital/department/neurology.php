<?php
session_start();
include '../header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neurology</title>
    <link rel="stylesheet" href="../nav.css">
</head>
<body>

    <?php
    include '../doctors/dr2.html'; 
    include 'neurology.html'; 
    ?>

</body>
</html>

<?php
include '../footer.php';
?>