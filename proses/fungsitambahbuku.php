<?php 
require 'conn.php';
$judul=$_POST['judul_buku'];
$penulis=$_POST['penulis'];
$penerbit=$_POST['penerbit'];
$halaman=$_POST['halaman'];
$jumlah=$_POST['jumlah'];

$eksistensiygdibolehkan=array('png','jpg','jpeg');
$nama_gbr=$_FILES['gambar']['name'];
$x=explode('.',$nama_gbr);
$ekstensi=strtolower(end($x));
$tmp_file=$_FILES['gambar']['tmp_name'];

if(in_array($ekstensi,$eksistensiygdibolehkan)== true) {
    move_uploaded_file($tmp_file,'gambar/'.$nama_gbr);
    $sql = "INSERT INTO tabel_buku VALUES ('','$nama_gbr','$judul','$penulis','$penerbit','$halaman','$jumlah')" or die(mysqli_error($conn));
    $result = mysqli_query($conn,$sql);
    header("location:../data_buku.php");
}




?>
