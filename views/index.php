<?php
include_once("models/User.php");
?>
 
<html>
<head>    
    <title>List Pengguna</title>
</head>
 
<body>
    <h1>List Pengguna</h1>
    <table width='80%' border=1>
        <tr>
            <th>ID User</th>
            <th>Password</th>
            <th>E-mail</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php  
            while($row = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$row['login']."</td>";
                echo "<td>".$row['pswd']."</td>";
                echo "<td>".$row['email']."</td>";    
                echo "<td>".$row['deskripsi']."</td>";    
                echo "<td><a href='views/update.php?login=$row[login]'>Edit</a> | <a href='delete.php?login=$row[login]'>Delete</a></td></tr>";        
            }
        ?>
    </table>
    
    </br>
    <a href="/crud_test/create">Tambah Pengguna</a>&nbsp;<a href="">Login</a>
</body>
</html>