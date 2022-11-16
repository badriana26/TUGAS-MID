<!doctype html>
<html>
<head>
    <tittle> Data Mahasiswa</tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body style="background-image:url(https://img.freepik.com/free-photo/pink-sky-background-with-crescent-moon_53876-129048.jpg);">
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Mahasiswa</h1>
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
        <td> <center><b> NIM </center></td> <td> <center><b>Nama </center></td>
        <td><center><b>Jenis kelamin </center></td> <td> <center><b>Alamat </center></td>
        <th> 
            <a href="input-mahasiswa.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi1.php";
   $sql=$koneksi1->query("select * from mahasiswa order by nim ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['nim'] ?> </center> </td>
         <td> <center> <?php echo $row['nama'] ?> </center> </td>
         <td> <center> <?php echo $row['jenis_kelamin'] ?> </center> </td>
         <td> <center> <?php echo $row['alamat'] ?> </center> </td>
         <td>
         <a href="edit-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
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