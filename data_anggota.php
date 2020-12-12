<?php 
include 'sidenav.php';
include 'kepala.php'; 
require 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM tabel_anggota");
?>
<head><title>Perpusku - Dashboard</title></head>
<body> 
<?php
include 'conn.php';
$query2="SELECT email FROM tabel_anggota";
$hasil=mysqli_query($conn,$query2);
$data=mysqli_fetch_array($hasil);
$kode=$data['email'];
$nourut=(int) substr($kode,3,3);

?>
    <div class="top-nav">
        <h3>DATA ANGGOTA</h3>
    </div><br><br><br><br>
    <a class="add" href="tambahanggota.php">Tambah data</a>
    <div class="konten-utama-anggota">
        <a href="tambahanggota.php">Tambah data</a><br>
        <table border="1" cellpadding="12">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>ID Anggota</th>
                <th>Aksi</th>
            </tr>
                <?php $i=1;?>
                <?php while( $data=mysqli_fetch_array($query)) { ?>
                    <?php
                    $nourut++;
                    $char="PRP";
                    $kode= $char.sprintf("%03s",$nourut);
                    ?>
            <tr>        
                <td><?php echo $i++;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['nis'];?></td>
                <td><?php echo $data['kelas'];?></td>
                <td><?php echo $data['jurusan'];?></td>
                <td><?php echo $kode;?></td>
                <td><a href="user.php?id=<?php echo $data['id_anggota'];?>">Rinci</a> | <a href="hapus.php?id=<?php echo $data['id_anggota'];?>">Hapus</a> </td>
            </tr>
            <?php } ?>
        </table>
    </div>

</body>
</html>