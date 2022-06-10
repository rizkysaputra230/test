<?php
// include database connection file
include_once("../config/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$login = $_POST['login'];
	
	$pswd=$_POST['pswd'];
	$email=$_POST['email'];
	$deskripsi=$_POST['deskripsi'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE pengguna SET login='$login',pswd='$pswd',email='$email',deskripsi='$deskripsi' WHERE login=$login");
	
	// Redirect to homepage to display updated user in list
	header("Location: views/index.php");
}
?>
<?php
$login = $_GET['login'];
 
$result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE login=$login");
 
while($data = mysqli_fetch_array($result))
{
	$login = $data['login'];
    $pswd = $data['pswd'];
	$email = $data['email'];
	$deskripsi = $data['deskripsi'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<form name="update_user" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>ID User</td>
				<td><input type="text" name="login" value=<?php echo $login;?>></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="pswd"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="login" value=<?php echo $_GET['login'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>