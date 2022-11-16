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

         <form action="proses-input-buku.php" method="post">
            <div class="form-group">
                <label for="nama"><b>kode buku </b></label>
                <Input type="hidden" name="id_buku" value="<?php echo$row['id_buku']?>" class="form-control">
                <Input type="number" name="kd_buku" value="<?php echo$row['kd_buku']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>judul</b></label>
                <Input type="text" name="judul" class="form-control">
            </div>
                <div class="form-group">
                <label for="nama"><b>penulis</b></label>
                <Input type="text" name="penulis" class="form-control">
            </div>

                 <div class="form-group">
                <label for="nama"><b>penerbit </b></label>
                <Input type="text" name="penerbit" class="form-control">
            </div>

                <div class="form-group">
                <label for="nama"><b>tahun terbit </b></label>
                <Input type="text" name="tahun_terbit" class="form-control">
            </div>
                       <div class="form-group">
                <label for="nama"><b>kategori</b></label>
                <Input type="text" name="kategori" class="form-control">
            </div>
           
                <div class="form-group">
                <label for="nama"><b>no rak </b></label>
                <Input type="text" name="no_rak" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>jumlah buku</b></label>
                <input type="text" name="jumlah_buku" class="form-control">
            </div>


            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>