<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td{
       border: 1px; 
    }
</style>
<?php
    require_once "koneksi.php ";
    $no=1;
    $query=mysqli_query($conn,"SELECT*FROM user");
    ?>
<body>
    <h4><a href="frm_regist.php">form registrasi</h4>
    <table>
    <tr>
        <th>No</th>
        <th>nama lengkap</th>
        <th>level</th>
        <th>username</th>
        <th>password</th>
        <th>actions</th>
    </tr>
  
    <?php
    //fungsi menampilkan data berupa array 
    while($row = mysqi_fetch_array($quey)):?>  //tampilkan hasil query
    <tr>
        <td><?=$no; ?></td> //memberikan penomoran
        <td><=? $row['nama_lengkap']; ?></td>
        <td><=? $row['level'];?></td>
        <td><=? $row['username']; ?></td>
        <td><=? $row['password'];?></td>
        <td><a href="frm_ubah_registrasi.php?id=<=?= $row['id_user]; ?>">ubah</a>
        <td><a href="hapus_registrasi.php?id=<=? $row[id_user]; ?>">hapus</a>
    </tr>
    <?php $no++; //incremen
    endwhile; ?> 
      </table>
</body>
</html> 