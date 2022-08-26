<?php
require_once "koneksi.php";
$namaLegkap =$_POST['nama_lengkap'];
$level      =$_POST['level'];
$username   =$_POST['username'];
$pass       =md5($_POST['password']);

$query="INSERT INTO user(id_user,nama_lengkap,level,username,password)
values(NULL,$namaLegkap','$level','$username','$password')";
$sql = mysqli_query($koneksi,$query);
$sqli=mysqli_query($sconn,$query);
//cek apakah query berhasil atau gagal
if($sql){
    echo"<script>alert('data gagal di simpan ');
    window.location.href=frm_registrasi.php<script>";
}