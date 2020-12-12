<?php 
require 'conn.php' ;
$id=$_GET['id'];   
if(!isset($_POST['id_anggota'])) {
    $res=mysqli_query($conn,"DELETE FROM tabel_anggota WHERE id_anggota='$id'");
    header("location:data_anggota.php");
}  
if(!isset($_POST['id_peminjam'])) {
    $res=mysqli_query($conn,"DELETE FROM data_peminjam WHERE id_peminjam='$id'");
    header("location:data_peminjam.php");
}    
if(!isset($_POST['id_buku'])) {
    $res=mysqli_query($conn,"DELETE FROM tabel_buku WHERE id_buku='$id'");
    header("location:data_buku.php");
} else {
    echo "<h1>GALAT !</h1>";
}

?> 