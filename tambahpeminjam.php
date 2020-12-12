<?php include 'sidenav.php';?>
<html>
<body>
    <form action="proses/fungsitambahpeminjam.php" class="form" method="POST" enctype="multipart/form-data">
    <h2>&nbsp&nbspTAMBAH DATA PEMINJAM</h2>
    <table>
    <tr class="tambah-data-ul">
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nama" required></td><br> 
    </tr>
    <tr>   
        <td>NIS </td>
        <td> : </td>
        <td><input type="text" name="nis" required></td> 
    </tr>
    <td>Kelas</td>
        <td> : </td>
        <td><select name="kelas">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select></td>
    </tr>
    <tr>    
        <td>jurusan</td>
        <td> : </td>
        <td><select name="jurusan">
                <option value="Elektronika Industri">Elektronika Industri</option>
                <option value="Instrumentasi Logam">Instrumentasi Logam</option>
                <option value="Kimia Industri">Kimia Industri</option>
                <option value="Pengelasan">Pengelasan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            </select></td>
    </tr>
    <tr>    
        <td>Judul Buku</td>
        <td> : </td>
        <td><input type="text" name="judul_buku" required></td> 
    </tr>
    <tr>    
        <td>Penerbit</td>
        <td> : </td>
        <td><input type="text" name="penerbit" required></td> 
    </tr>
    <tr>    
        <td>Halaman</td>
        <td> : </td>
        <td><input type="number" name="halaman"></td> 
    </tr>
    
    <tr>    
        <td>Tanggal meminjam</td>
        <td> : </td>
        <td><input type="date" name="tanggal_peminjaman" readonly="" value="<?php echo date("Y-m-d");?>"</td> 
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Tambah data"></td>
    </tr>
</tr>
    </form>
</table>
</body>
</html>