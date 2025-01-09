<html>
<head>
	<title>Aplikasi CRUD</title>
</head>
<body>
	<h1>Data Lokasi</h1>
	<a href="form_tambah.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>No</th>
		<th>Alamat</th>
		<th>Latitude</th>
		<th>Longtitude</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM lokasi"; // Query untuk menampilkan semua data lokasi
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['no']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td>".$data['latitude']."</td>";
		echo "<td>".$data['longtitude']."</td>";
		echo "<td><a href='form_ubah.php?no=".$data['no']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?no=".$data['no']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
