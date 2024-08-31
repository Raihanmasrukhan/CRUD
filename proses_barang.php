<?php
    include_once("koneksi.php");
    
    if(isset ( $_POST ['save'])) {
        $nama_barang = $_POST ['nama_barang'];
        $kode_barang = $_POST ['kode_barang'];
        $harga = $_POST ['harga'];
        $stock = $_POST ['stock'];

        $query=mysqli_query ($koneksi, "INSERT INTO barang VALUES (NULL, '$nama_barang', '$kode_barang', '$harga', '$stock')");
    }

    if($query) {
        echo '<script>window.alert("data berhasil ditambahkan")
        window.location="barang.php"
        </script>';
    } else {
        echo 'gagal menambahkan data';
        echo '<a href="barang.php">kembali</a>';
    }
?>
