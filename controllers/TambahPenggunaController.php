<?php
include_once("models/User.php");

if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $pswd = $_POST['pswd'];
    $hashPswd = password_hash($pswd, PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];
    
    $result = mysqli_query($mysqli, "INSERT INTO pengguna(login, pswd, email, deskripsi) VALUES('$login','$hashPswd','$email','$deskripsi')");
    
    echo "User added successfully. <a href='index.php'>View Users</a>";
}
