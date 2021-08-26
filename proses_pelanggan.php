<?php

if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];



    if(empty($nama)){
        echo "<script>alert('Nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }else {

        include "koneksi_toko.php";
        $insert=mysqli_query($conn,"INSERT INTO `pelanggan` (`nama`, `alamat`, `telp`) VALUES ('".$nama."','".$alamat."', '".$telp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_produk.php';</script>";

        }

    }

}

?>