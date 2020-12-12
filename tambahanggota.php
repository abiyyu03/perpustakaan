<?php include 'sidenav.php';?>
<html>
<body>
    <form action="proses/fungsitambahanggota.php" class="form" method="POST">
    <h2>&nbsp&nbspTAMBAH DATA ANGGOTA</h2>
    <table>
    <tr class="tambah-data-ul">
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nama"></td><br> 
    </tr>
    <tr>   
        <td>NIS</td>
        <td> : </td>
        <td><input type="text" name="nis"></td> 
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td> : </td>
        <td><input type="text" name="tempat_lahir"></td>
    </tr>
    <tr>    
        <td>Tanggal Lahir</td>
        <td> : </td>
        <td><input type="text" name="tanggal_lahir"></td> 
    </tr>
    <tr>    
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
        <td>E-mail</td>
        <td> : </td>
        <td><input type="email" name="email"></td>
    </tr>
    <tr>
        <td><button type="submit" name="submit">Tambah data</button></td>
    </tr>
</tr>
    </form>
</table>
</body>
</html>