<?php
// include database connection file
include_once("config/config.php");
 
if(isset($_POST['update']))
{	
	$login = $_POST['login'];
    $pswd = $_POST['pswd'];
    $hashPswd = password_hash($pswd, PASSWORD_DEFAULT);
	$email=$_POST['email'];
	$deskripsi=$_POST['deskripsi'];
		
	$result = mysqli_query($mysqli, "UPDATE users SET login='$login',pswd='$hashPswd',email='$email',deskripsi='$deskripsi' WHERE login=$login");
	
	header("Location: views/index.php");
}

$login = $_GET['login'];
 
$result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE login=$login");
 
while($data = mysqli_fetch_array($result))
{
	$login = $data['login'];
	$email = $data['email'];
	$deskripsi = $data['deskripsi'];
}