<?php
include 'conn.php';
if(!isset($_SESSION['username'])) {
    header ("location:login.php");
}
?>