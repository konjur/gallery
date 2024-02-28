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
    <title>Halaman Album</title>
</head>
<body>
<div class="container mt-3">
<div class="mt-4 p-3 bg-primary text-white rounded">
<center><h2>Halaman Album</h2></center>
</div>
   
   <div class="container mt-3">
   <a type="button" class="btn btn-primary" href="tambah_album_foto.php">Tambah Album</a>

       <table class="table table-bordered">
       <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                    <button type="button" class="btn btn-success" href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</button>
                    <button type="button" class="btn btn-warning" href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</button>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>