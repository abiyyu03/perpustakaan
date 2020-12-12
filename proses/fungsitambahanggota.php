<?php 
include 'kepala.php'; 
include 'conn.php';
if(isset($_POST['submit'])) {
    $nama=$_POST['nama'];
    $nis=$_POST['nis'];
    $tl=$_POST['tempat_lahir'];
    $tgll=$_POST['tanggal_lahir'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $email=$_POST['email'];
    
    $sql = "INSERT INTO tabel_anggota VALUES('','$nama','$nis','$tl','$tgll','$kelas','$jurusan','$email')";
    $result = mysqli_query($conn,$sql);

    header("location:../data_anggota.php");


}
 
?>