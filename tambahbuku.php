<?php include 'sidenav.php';?>
<html>
<body>
    <form action="proses/fungsitambahbuku.php" class="form" method="POST" enctype="multipart/form-data">
    <h2>&nbsp&nbspTAMBAH DATA BUKU</h2>
    <table>
    <tr class="tambah-data-ul">
        <td>Gambar</td>
        <td> : </td>
        <td><label><input type="file" name="gambar" required></label></td><br> 
    </tr>
    <tr>   
        <td>Judul Buku </td>
        <td> : </td>
        <td><label><input type="text" name="judul_buku"></label></td> 
    </tr>
    <tr>
        <td>Penulis</td>
        <td> : </td>
        <td><label><input type="text" name="penulis"></label></td>
    </tr>
    <tr>    
        <td>Penerbit</td>
        <td> : </td>
        <td><label><input type="text" name="penerbit"></label></td> 
    </tr>
    <tr>    
        <td>halaman</td>
        <td> : </td>
        <td><label><input type="number" name="halaman"></label></td> 
    </tr>
    <tr>    
        <td>jumlah</td>
        <td> : </td>
        <td><label><input type="number" name="jumlah"></label></td> 
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Tambah data"></td>
    </tr>
</tr>
    </form>
</table>
</body>
</html>