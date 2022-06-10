<?php
require_once"koneksi.php";
$namalengkap=$_POST['nama_lengkap'];
$level =$_POST['level'];
$username=$_POST['username'];
$password=$_POST['password'];
$iduser= $_POST['id_user'];
$query=myusqli_query($_sconn,"upadate user nama_lengkap=",$namalengkap,"level=",$level,
    username='$username','password='$password,'where id_user='$iduser");
if($query){
    