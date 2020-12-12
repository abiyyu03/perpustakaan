<?php  
    include 'sidenav.php';
    include 'kepala.php';
    require 'conn.php';
    $nama=$_POST['nama'];
    $nis=$_POST['nis'];
    $tl=$_POST['tempat_lahir'];
    $tgll=$_POST['tanggal_lahir'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $email=$_POST['email']; 
 
        $sql=mysqli_query($conn, "UPDATE tabel_anggota SET nama='$nama',nis='$nis',tempat_lahir='$tl',tanggal_lahir='$tgll',kelas='$kelas',jurusan='$jurusan',email='$email' WHERE id_anggota='$id'");
        header("location:data_anggota.php");
    ?>