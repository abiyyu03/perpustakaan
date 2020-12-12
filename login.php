<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="gayalogin.css">
</head>
<body>
<?php 
if(isset($_SESSION['message'])) {
    echo $_SESSION['message'];
}
?>
    <center>
    <form action="proses/proseslogin.php" method="POST" autocomplete="off">
        <h1>PERPUSKU ADMINISTRATOR</h1>
        <div class="inputan">
        <h2>MASUK</h2>
            <input type="text" name="username" class="username" placeholder="Username"><br>
            <input type="password" name="password" class="password" placeholder="Password"><br>
        
        <input type="submit" name="submit" Value="Login !" class="submit">
    </div>
</form>
</center> 
</body>
</html>