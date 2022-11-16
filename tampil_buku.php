<!doctype html>
<html>
<head>
    <tittle> </tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data buku</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
         <td> <center><b> kode buku </center></td> <td> <center><b>judul </center></td>
        <td><center><b>penulis </center></td> <td> <center><b>penerbit</center></td>
            <td> <center><b>tahun terbit</center></td><td> <center><b>kategori</center></td><td>
             <center><b>no rak</center></td><td> <center><b>jumlah buku</center></td>
        <th> 
            <a href="input-buku.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from buku order by id_buku ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['kd_buku'] ?> </center> </td>
         <td> <center> <?php echo $row['judul'] ?> </center> </td>
         <td> <center> <?php echo $row['penulis'] ?> </center> </td>
         <td> <center> <?php echo $row['penerbit'] ?> </center> </td>
         <td> <center> <?php echo $row['tahun_terbit'] ?> </center> </td>
         <td> <center> <?php echo $row['kategori'] ?> </center> </td>
         <td> <center> <?php echo $row['no_rak'] ?> </center> </td>
         <td> <center> <?php echo $row['jumlah_buku'] ?> </center> </td>
         
         <td>
         <a href="edit-buku.php?id=<?php echo $row['id_buku']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-buku.php?id=<?php echo $row['id_buku']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
</body>
</html>