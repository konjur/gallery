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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<center>
<div class="container mt-3">
<div class="mt-4 p-3 bg-primary text-white rounded">
    <h1>Tambah Foto</h1>
</div>
</center>
<body>

<form action="proses_tambah_foto.php" method="post" enctype="multipart/form-data">
    <table>
        <div class="mb-3 mt-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judulfoto" name="judulfoto">
        </div>
        <div class="mb-3 mt-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsifoto" name="deskripsifoto"></td>
        </div>
        <div class="mb-3 mt-3">
        <label for="lokasifile" class="form-label">Lokasi File</label>
        <input type="file" class="form-control" id="lokasifile" name="lokasifile"></td>
        </div>
        <div class="mb-3 mt-3">
        <label for="lokasifile" class="form-label">Album</label>
        <select name="albumid">
        <?php
        include "koneksi.php";
        $userid=$_SESSION['userid'];
        $sql=mysqli_query($conn,"select * from album where userid='$userid'");
        while($data=mysqli_fetch_array($sql)){
        ?>
        <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
        <?php
            }
        ?>
        </select>
                    
        </div>
        </div>
        <button type="submit" value="Tambah" class="btn btn-success">Tambah</button>
    </tr>
    </table>
</form>
</center>