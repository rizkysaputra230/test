<?php
include_once("controllers/TambahPenggunaController.php");
?>

<html>
<head>
	<title>Tambah Pengguna</title>
</head>
 <style>
	.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 25%;
  border-radius: 25px;
}

.modal-content h2 {
	text-align: center;
}

.modal-content p {
	text-align: center;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
 </style>
<body>
    <h1>Tambah Pengguna</h1>

	<!-- The Modal -->
	<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<h2>Peringatan</h2>
		<p>Apakah proses tambah pengguna ingin dibatalkan ?</p>
		<button onclick="location.href = '/crud_test'";>Ya</button>
		<button class="cancel">Tidak</button>
	</div>

	</div>
	<form action="/crud_test/create" method="post">
		<table width="25%">
			<tr> 
				<td>ID User</td>
				<td><input type="text" name="login"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="pswd"></td>
			</tr>
			<tr> 
				<td>E-mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr> 
				<td></td>
				<td>
                    <input type="submit" name="submit" value="Tambah">
                    <input type="button" id="cancel" value="Cancel" /> 
                </td>
			</tr>
		</table>
	</form>
</body>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("cancel");

btn.onclick = function() {
  modal.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var cancel = document.getElementsByClassName("cancel")[0];

cancel.onclick = function() {
  modal.style.display = "none";
}

</script>
</html>