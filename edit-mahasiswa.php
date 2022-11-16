<!doctype html>
<html>
<head>
        <tittle> menampilkan hasil input form</tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit-mahasiswa.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from mahasiswa where mahasiswa_id='$id'");
                $row=$tampil->fetch_assoc();
             ?>
            <div class="form-group">
                <label for="nim"><b>NIM </b></label>
                <Input type="hidden" name="mahasiswa_id" value="<?php echo$row['mahasiswa_id']?>" class="form-control">
                <Input type="number" name="nim" value="<?php echo$row['nim']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>NAMA</b></label>
                <Input type="text" name="nama" value="<?php echo$row['nama']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
                <select name="jenis_kelamin" class="form-control">
                <option value ="<?php echo$row['jenis_kelamin']?>" selected><?php echo$row['jenis_kelamin']?></option>
                <option value ="Laki-laki"> Laki-Laki</option>
                <option value ="Perempuan"> Perempuan</option>
            </select>
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <textarea name="alamat" class="form-control"><?php echo$row['alamat']?></textarea>
            </div>

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>