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
    <h1>Tambah Album</h1>
</div>
</center>
<body>

    <form action="proses_tambah_album.php" method="post" enctype="multipart/form-data">
    <table>
        <div class="mb-3 mt-3">
        <label for="namaalbum" class="form-label">Nama Album</label>
        <input type="text" class="form-control" id="namaalbum" name="namaalbum">
        </div>
        <form action="proses_tambah_foto.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        </div>
        <button type="submit" value="Tambah" class="btn btn-success">Tambah</button>
        </tr>
        </table>
    </form>