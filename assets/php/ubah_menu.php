<?php
require_once"koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT*FROM user where id_user=$id");
$row =mysqli_fetch_row($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form ubah registrasi</title>
</head>
<body>
    <h3>formulir ubah registrasi</h3>
    <br>
    <form action="simpan_registrasi.php"method="post">
    <table>
        <tr>
            <td>nama lengkap</td>
            <td><input type="text" name="level" value="<?=$row['l'];?>"></td>
            <input type="hidden" name="id_user" value="<?=$row['id_user'];?>">
        </tr>
        <tr>
            <td>username</td>
            <td><input type="text" name="username" value="<?=$row['username']; ?>"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="text" name="password" value="<?$row['password'];?>"></td>
        </tr>
        <td>
            <td colospan="4" style="text-align: center;"><input type="submit" name="simpan" value="simpan"></td>
        </td>
    </table>
    </form>    
</body>
</html>