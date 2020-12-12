<?php
session_start();
require 'conn.php';

$user=mysqli_real_escape_string($conn,$_POST['username']);
$pass=mysqli_real_escape_string($conn,$_POST['password']);

$query= mysqli_query($conn,"SELECT * FROM admin WHERE username='".$user."' AND password='".$pass."'");
$data = mysqli_fetch_array($query);
 

if(!empty($data)) 
{
    $_SESSION['username']=$data['username'];
    $_SESSION['panggilan']=$data['panggilan'];
    header("location:../index.php");
} else {
    echo "<script>alert('PERIKSA KEMBALI USERNAME DAN PASSWORD')</script>";
    header("location:../login.php");
}
?>
