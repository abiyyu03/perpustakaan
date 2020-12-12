<?php 
include 'sidenav.php';
include 'kepala.php'; 
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM data_peminjam");
?>
<head><title>Perpusku - Dashboard</title></head>
<body> 
    <div class="top-nav">
        <h3>DATA PEMINJAM</h3>
    </div><br><br><br><br>
    <a class="add" href="tambahpeminjam.php">Tambah data</a>
    <div class="konten-utama-anggota">
        <a href="tambahpeminjam.php">Tambah data</a><br>
        <table border="1" cellpadding="12">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>Halaman</th>
                <th>Tanggal peminjaman</th>
                <th>Aksi</th>
            </tr>
                <?php $i=1;?>
                <?php while( $data=mysqli_fetch_array($query)) {?>
            <tr>        
                <td><?php echo $i++;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['nis'];?></td>
                <td><?php echo $data['kelas'];?></td>
                <td><?php echo $data['jurusan'];?></td>
                <td><?php echo $data['judul_buku'];?></td>
                <td><?php echo $data['penerbit'];?></td>
                <td><?php echo $data['halaman'];?></td>
                <td><?php echo $data['tanggal_peminjaman'];?></td>
                <td><a href="hapus.php?id=<?php echo $data['id_peminjam'];?>">Hapus</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>

</body>
</html>