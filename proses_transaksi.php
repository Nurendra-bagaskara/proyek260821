<?php
if($_POST){
    
    $id_pelanggan=$_POST['id_pelanggan'];
    $id_petugas=$_POST['id_petugas'];
    $tanggal_transaksi=$_POST['tanggal_transaksi'];

    if(empty($id_pelanggan)){
        echo "<script>alert('id Pelanggan tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($id_petugas)){
        echo "<script>alert('id Petugas tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($tanggal_transaksi)){
        echo "<script>alert('Tanggal Transaksi tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    }else {
        include "koneksi_toko.php";
        $insert=mysqli_query($conn,"INSERT INTO `transaksi` ( `id_pelanggan`, `id_petugas`, `tanggal_transaksi`) VALUES 
        ('".$id_pelanggan."','".$id_petugas."', '".$tanggal_transaksi."')");

        if($insert){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";

        }

    }

}

?>