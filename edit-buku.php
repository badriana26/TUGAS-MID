<!doctype html>
<html>
<head>
        <tittle> </tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit-buku.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from buku where id_buku='$id'");
                $row=$tampil->fetch_assoc();
             ?>
            <div class="form-group">
                <label for="kode_buku"><b>kode buku </b></label>
                <Input type="hidden" name="id_buku" value="<?php echo$row['id_buku']?>" class="form-control">
                <Input type="number" name="kd_buku" value="<?php echo$row['kd_buku']?>" class="form-control">

            </div>
            <div class="form-group">
                <label for="judul"><b>judul</b></label>
                <Input type="text" name="judul" value="<?php echo$row['judul']?>"class="form-control">
            </div>
                <div class="form-group">
                <label for="penulis"><b>penulis</b></label>
                <Input type="text" name="penulis" value="<?php echo$row['penulis']?>"class="form-control">
            </div>

                 <div class="form-group">
                <label for="penerbit"><b>penerbit </b></label>
                <Input type="text" name="penerbit" value="<?php echo$row['penerbit']?>"class="form-control">
            </div>

                <div class="form-group">
                <label for="tahun_terbit"><b>tahun terbit </b></label>
                <Input type="text" name="tahun_terbit" value="<?php echo$row['tahun_terbit']?>"class="form-control">
            </div>
                       <div class="form-group">
                <label for="kategori"><b>kategori</b></label>
                <Input type="text" name="kategori" value="<?php echo$row['kategori']?>"class="form-control">
            </div>
           
                <div class="form-group">
                <label for="no_rak"><b>no rak </b></label>
                <Input type="text" name="no_rak" value="<?php echo$row['no_rak']?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="jumlah_buku"><b>jumlah buku</b></label>
                <input type="text" name="jumlah_buku" value="<?php echo$row['jumlah_buku']?>"class="form-control">
            </div>

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html> 