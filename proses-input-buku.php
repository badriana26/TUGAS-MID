<?php

$id_buku=$_POST['id_buku'];
$kd_buku=$_POST['kd_buku'];
$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$kategori=$_POST['kategori'];
$no_rak=$_POST['no_rak'];
$jumlah_buku=$_POST['jumlah_buku'];

include "koneksi.php";

$simpan=$koneksi->query("insert into buku(id_buku,kd_buku,judul,penulis,penerbit,tahun_terbit,kategori,no_rak,jumlah_buku) 
                        values('$id_buku','$kd_buku','$judul','$penulis','$penerbit','$tahun_terbit','$kategori','$no_rak','$jumlah_buku')");

if($simpan==true){

    header("location:tampil_buku.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>