<?php
include_once("config/config.php");
 
$login = $_GET['login'];
 
$result = mysqli_query($mysqli, "DELETE FROM users WHERE login=$login");
 
header("Location:views/index.php");
?>