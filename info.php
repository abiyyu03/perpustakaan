<?php 
include 'kepala.php';
include 'sidenav.php';
?>
<head><title>Perpusku</title></head>
<body> 
<div class="top-nav"> 
    <h3>TENTANG AKUN</h3>
        <h3><a class="logout" href="logout.php">LOGOUT</a></h3>
    </div><br><br><br><br>
    <div class="konten-utama">
    <center>
        <div style="margin-left:-100px;">
            <img style="width:15em;border-radius:220px" src="gambar/naruto.png">
            <h2>Nama :</h2><h2 style="font-size:30px;color:rgb(0, 89, 255);margin-top:-20px"><?php echo $_SESSION['panggilan'];?> </h2>
            <h2>username :</h2><h2 style="font-size:30px;color:rgb(0, 89, 255);margin-top:-20px "><?php echo $_SESSION['username'];?> </h2>  
            
        </div>
    </center>
    </div>
</body>
</html>