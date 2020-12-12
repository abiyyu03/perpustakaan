<?php 
include 'sidenav.php';
include 'kepala.php'; 
require 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM tabel_buku");
?>
<head><title>Perpusku - Data Buku</title></head>
<body> 
    <div class="top-nav"> 
        <h3>DATA BUKU</h3>
        <a class="add2" href="tambahbuku.php">Tambah data</a><br><br>
    </div><br><br><br><br>
    <div class="konten-utama-anggota">

        <table border="1" cellpadding="12">
            <tr>
                <th>No</th>
                <th>Cover buku</th>
                <th>Judul buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>halaman</th>
                <th>jumlah</th>
                <th>Aksi</th>
            </tr>
                <?php $i=1;?>
                <?php while( $data=mysqli_fetch_array($query)) { ?>
            <tr>      
                <td><?php echo $i++;?></td>
                <td><img style="width:200px;"src="<?php echo "gambar/".$data['gambar'];?>"></td>
                <td><?php echo $data['judul_buku'];?></td>
                <td><?php echo $data['penulis'];?></td>
                <td><?php echo $data['penerbit'];?></td>
                <td><?php echo $data['halaman'];?></td>
                <td><?php echo $data['jumlah'];?></td>
                <td><a href="hapus.php?id=<?php echo $data['id_buku'];?>">Hapus</a></td>
            </tr>
            <?php } ?>
        </table>

        <!--JAVASCRIPT FOR MODAL DIALOGUE!-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#linked').click(function(){
                    $('#modal-kotak,#bg').fadeIn("slow");
                });
                $('#tombol-tutup').click(function(){
                    $('#modal-kotak,#bg').fadeOut("slow");
                });
            });
        </script>
    </div>

</body>
</html>