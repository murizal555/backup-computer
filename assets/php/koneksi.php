<?php //tak pembuka
$host="localhost";
$username="root";
$password=" ";// pasword mysql kita
$database="cobar_kafe";
//cara =1
$sonn=mysqli_connect($host,$username,$password,$database); //connect ke data base
//cara 2
$sconn=mysqli_connect('localhost','root','','cobar_cafe');
if(!$sconn){
    echo"koneksi gagal :".mysqli_connect_error();
}else{
    echo"koneksi_berhasil";
}