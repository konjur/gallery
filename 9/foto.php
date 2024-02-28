<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<br>
 <?php include"header.php" ?>
</br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Foto</title>
</head>
<body>
<div class="container mt-3">
<div class="mt-4 p-3 bg-primary text-white rounded">
<center><h2>Halaman Foto</h2></center>
</div>
    
    <div class="container mt-3">
   <a type="button" class="btn btn-primary" href="tambah_foto.php">Tambah Foto</a>
     
     <table class="table table-bordered">
     <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal Unggah</th>
            <th>Lokasi File</th>
            <th>Album</th>
            <th>Disukai</th>
            <th>Aksi</th>
        </tr>
    </thead>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from foto,album where foto.userid='$userid' and foto.albumid=album.albumid");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['fotoid']?></td>
                    <td><?=$data['judulfoto']?></td>
                    <td><?=$data['deskripsifoto']?></td>
                    <td><?=$data['tanggalunggah']?></td>
                    <td>
                        <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                    </td>
                    <td><?=$data['namaalbum']?></td>
                    <td>
                        <?php
                            $fotoid=$data['fotoid'];
                            $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                            echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="hapus_foto.php?fotoid=<?=$data['fotoid']?>">Hapus</a>
                        <a href="edit_foto.php?fotoid=<?=$data['fotoid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>