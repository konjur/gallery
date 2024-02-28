<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
</head>
<body>
   
<br>
 <?php include"header.php" ?>
</br>

<div class="container mt-3">
<div class="mt-4 p-3 bg-primary text-white rounded">
<center><h1>Halaman utama</h1></center>
</div>
    
    <div class="container mt-3">
     
     <table class="table table-bordered">
     <thead class="table-info">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Jumlah Like</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <?php
            include "koneksi.php";
            $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['fotoid']?></td>
                <td><?=$data['judulfoto']?></td>
                <td><?=$data['deskripsifoto']?></td>
                <td>
                    <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td><?=$data['namalengkap']?></td>
                <td>
                    <?php
                        $fotoid=$data['fotoid'];
                        $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                    ?>
                </td>
                <td>
                <button type="button" class="btn btn-success"><a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a><button>
                <button type="button" class="btn btn-danger"><a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a></button>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    
</body>
</html>