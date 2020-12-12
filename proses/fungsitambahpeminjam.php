<?php 
include 'kepala.php'; 
include 'conn.php';
if(isset($_POST['submit'])) {
    $nama=$_POST['nama'];
    $nis=$_POST['nis'];
    $kls=$_POST['kelas'];
    $jrs=$_POST['jurusan'];
    $jdl=$_POST['judul_buku'];
    $pnrbt=$_POST['penerbit'];
    $hal=$_POST['halaman'];
    $tglpmnjmn=$_POST['tanggal_peminjaman'];

    $sql = "INSERT INTO data_peminjam VALUES('','$nama','$nis','$kls','$jrs','$jdl','$pnrbt','$hal','$tglpmnjmn')";
    $result = mysqli_query($conn,$sql); 
    header("location:../data_peminjam.php");


}
 
?>