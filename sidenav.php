<?php
include 'kepala.php';
session_start();
include 'conn.php';
if(!isset($_SESSION['username'])) {
    header ("location:login.php");
}
?>
<div id="sidenav" >  
     <h1>PERPUSKU</h1>
     <h3>ADMINISTRATOR</h3>   
        <ul>
            <br><br>
            <li><a href="index.php"><i class="fas fa-desktop"></i> DASHBOARD</a></li>
            <li><a href="data_anggota.php"><i class="fas fa-user"></i> DATA ANGGOTA</a></li>
            <li><a href="data_buku.php"><i class="fas fa-book"></i> DATA BUKU</a></li>
            <li><a href="data_peminjam.php"><i class="fas fa-car"></i> DATA PEMINJAM</a></li>
            <li><a href="info.php"><i class="fas fa-info-circle"></i> TENTANG</a></li>
        </ul>
    </div>


