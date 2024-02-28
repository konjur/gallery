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
    <title>Halaman Komentar</title>
</head>
<body>
<div class="container mt-3">
<div class="mt-4 p-3 bg-primary text-white rounded">
<center><h1>Halaman Foto</h1></center>
</div>
    
    <form action="tambah_komentar.php" method="post">
        <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
        <table>
            <div class="mb-3 mt-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judulfoto" value="<?=$data['judulfoto']?>">
            </div>
            <div class="mb-3 mt-3">
            <label for="deskripsifoto" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsifoto" value="<?=$data['deskripsifoto']?>">
            </div>
            <div class="mb-3 mt-3">
            <label for="lokasifile" class="form-label">Foto</label>
            &nbsp;
                <img src="gambar/<?=$data['lokasifile']?>" width="200px">
            </div>
            <div class="mb-3 mt-3">
            <label for="komentar" class="form-label">Komentar</label>
            <input type="text" class="form-control" name="isikomentar">
            </div>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>

    <table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
        </thead>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from komentarfoto,user where komentarfoto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['komentarid']?></td>
                <td><?=$data['namalengkap']?></td>
                <td><?=$data['isikomentar']?></td>
                <td><?=$data['tanggalkomentar']?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>