<?php 
include 'kepala.php';
include 'sidenav.php';
?>
<head><title>Perpusku - Dashboard</title></head>
<body> 
<div class="top-nav"> 
    <h3>DASHBOARD</h3>      
      <h3><a class="logout" href="logout.php">LOGOUT</a></h3>
</div><br><br><br><br>
    <div class="konten-utama"><br><br><br>
    <center>
        <h1 style="text-transform:uppercase;">SELAMAT DATANG, <?php echo $_SESSION['username'];?> :=)</h1>
        <h2>Apa yang akan anda lakukan ?</h2>
        <a class="add-dashboard" href="tambahanggota.php"><i class="fas fa-user"></i> Tambah Anggota</a>
        <a class="add2-dashboard" href="tambahbuku.php"><i class="fas fa-book"></i> Tambah Buku</a> 
        <a class="add2-dashboard" href="tambahpeminjam.php"><i class="fas fa-book"></i> Tambah Peminjam</a> <br>

    </center>
    </div>
</body>
</html>