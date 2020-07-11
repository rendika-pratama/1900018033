<!DOCTYPE html>
<html>
<head>
	<title>Data SIM</title>
	<link rel="stylesheet" type="text/css" href="Project_SIM.css">
</head>
<script type="text/javascript">
	function hapus(){
		var yakin = confirm("Anda Ingin Menghapus?");

		if (yakin==true) {
			document.location.href = "Hapus2.php";
		} else {

		}
	}
</script>
<body class="body_Utama">
	<?php 
		function Table_Data(){
			$fp = fopen("Data_SIM.txt", "a+");
			while ($data = fgets($fp, 100)) {
				$pisah = explode("|", $data);
				echo "<tr>
					<td>$pisah[0]</td>
					<td>$pisah[1]</td>
					<td>$pisah[2]</td>
					<td>$pisah[3]</td>
					<td>$pisah[4]</td>
					<td>$pisah[5]</td>
					<td>$pisah[6]</td>
					<td>$pisah[7]</td>
					</tr>";
			}
		}
	 ?>
	 <div class="Data_Layout">
	 	<fieldset class="Kotak_Data">
	 		<center><h2>Data SIM</h2></center>
	 		<center>	
	 			<table border="1" cellpadding="5">
	 				<tr>
	 					<th>Nama</th>
	 					<th>Alamat</th>
	 					<th>Tempat Lahir</th>
	 					<th>Tanggal Lahir</th>
	 					<th>Jenis Kelamin</th>
	 					<th>Tinggi</th>
	 					<th>Pekerjaan</th>
	 					<th>Gol. SIM</th>
	 				</tr>
	 				<?php echo Table_Data(); ?>
	 		</table>
	 		</center>
	 		<center>
	 			<br>
	 			<button><a href="Home3.html" id="Link_Button">Home</a></button>
	 			<button onclick="hapus()" id="Link_Button">Hapus</button>	
	 		</center>
	 	</fieldset>
	 </div>
</body>
</html>