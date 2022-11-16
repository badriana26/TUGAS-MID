<?php

include "koneksi.php";
$id_buku=$_POST['id_buku'];
$kd_buku=$_POST['kd_buku'];
$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$kategori=$_POST['kategori'];
$no_rak=$_POST['no_rak'];
$jumlah_buku=$_POST['jumlah_buku'];

$ubah=$koneksi->query("update buku set kd_buku='$kd_buku', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', kategori='$kategori', no_rak='$no_rak', jumlah_buku='$jumlah_buku' where id_buku='$id_buku'");

if($ubah==true){

    header("location:tampil_buku.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>