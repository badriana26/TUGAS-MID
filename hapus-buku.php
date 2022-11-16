<?php
$id=$_GET['id'];

include "koneksi1.php";
$hapus=$koneksi1->query("delete from buku where id_buku='$id'");

if($hapus==true){

    header("location:tampil_buku.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>