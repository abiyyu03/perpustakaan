
<html>
    <head>
        <title>Perpusku - Detail</title>
    </head>
    <body>
    <?php
    require 'conn.php';
    $id=$_GET['id']; 
    $sql=mysqli_query($conn,"SELECT * FROM tabel_anggota WHERE id_anggota='$id'");
     
    while($data = mysqli_fetch_array($sql)) { 
    ?>
    <div class="contain"> 
    <form action="update.php" method="POST">
    <table>
    <tr class="tambah-data-ul">
        <td>Nama</td>
        <td> : </td>
        <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td><br> 
    </tr>
    <tr>   
        <td>NIS</td>
        <td> : </td>
        <td><input type="text" name="nis" value="<?php echo $data['nis'];?>"></td> 
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td> : </td>
        <td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>"></td>
    </tr>
    <tr>    
        <td>Tanggal Lahir</td>
        <td> : </td>
        <td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>"></td> 
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
        <td><input type="email" name="email" value="<?php echo $data['email'];?>"</td>
    </tr>
    <tr>
        <td><button type="submit" name="submit">Tambah data</button></td>
    </tr>
</tr>
    </form>
</table>
        </div>
        </form>
<?php } ?>
    </body>
</html>