<?php
  include_once("koneksi.php");
    
  if(isset ( $_POST ['edit'])) {
      $nama_barang = $_POST ['nama_barang'];
      $kode_barang = $_POST ['kode_barang'];
      $harga = $_POST ['harga'];
      $stock = $_POST ['stock'];
  
  $query = mysqli_query($barang, "UPDATE barang SET nama_barang='$nama_barang', kode_barang='$kode_barang', harga='$harga', stock='$stock' WHERE id=$id");
  }

    if($query) {
        echo '<script>window.alert("data berhasil ditambahkan")
        window.location="barang.php"
        </script>';
    } else {
        echo 'gagal edit data';
        echo '<a href="barang.php">kembali</a>';
    }
?>