<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbbarang";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if(!$koneksi){
  die('conection failed' . mysqli_connect_error());
}

?>
