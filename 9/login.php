<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <center>
	<h1>Silahkan Login</h1>
	<img src="gambar/siesta-tantei-wa-mou-shindeiru.gif" class="rounded" height="200" width="300">
  </center>
</div>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
    <form action="proses_login.php" method="post">
	<div class="container mt-3">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
	  <input type="text" class="form-control" name="username" placeholder="Masukkan username">
    </div>
	<div class="mb-3">
	   <label for="uname" class="form-label">Username:</label>
	   <input type="password" class="form-control" name="password" placeholder="Masukkan password">
    </div>
			<tr>
				<td></td>
				<td><input type="submit" value="LOGIN" class="btn btn-primary"></td>
				<td><a href="pendaftaran.php"><button type="button" class="btn btn-primary">Registrasi</button></a></td>
			</tr>
		</table>			
	</form>
</body>
</html>