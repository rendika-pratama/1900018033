<!DOCTYPE html>
<html>
<head>
	<title>Registrasi SIM</title>
	<link rel="stylesheet" type="text/css" href="Project_SIM.css">
</head>
<body class="body_Utama">
	<div class="Registrasi_Layout">
		<form action="Proses_Registrasi.php" method="POST">
			<fieldset class="Kotak_Registrasi">
				<center><h2>Registrasi SIM</h2></center>
				<label><pre>Nama 		: <input type="text" name="nama" required="Nama"></pre></label>
				<label><pre>Alamat 		: <input type="text" name="alamat" required="Alamat"></pre></label>
				<label><pre>Tempat Lahir  	: <input type="text" name="tempat_lahir" required="Tempat_Lahir"></pre></label>
				<label><pre>Tanggal Lahir 	: <input type="text" name="tanggal_lahir" required="Tanggal_Lahir"></pre></label>
				<label><pre>Jenis Kelamin 	: <label><input type="radio" name="jenis" value="Laki-Laki">Laki - Laki</label> <label><input type="radio" name="jenis" value="Perempuan">Perempuan</label></pre></label>
				<label><pre>Tinggi 		: <input type="text" name="tinggi" required="Tinggi"></pre></label>
				<label><pre>Pekerjaan 	: <input type="text" name="kerja" required="Kerja"></pre></label>
				<label><pre>Gol. SIM 	: <select name="Gol_SIM">
					<option value="A">SIM A</option>
					<option value="B">SIM B</option>
					<option value="C">SIM C</option>
					<option value="D">SIM D</option>
				</select></pre></label>
				<center><pre><input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"></pre></center>
			</fieldset>
		</form>
	</div>
</body>
</html>