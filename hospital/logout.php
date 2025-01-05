<?php
session_unset();
session_destroy();
setcookie("logined",null);
header("Location: index.php");
?>