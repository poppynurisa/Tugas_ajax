<?php 
	require 'koneksi.php';
	session_start();
	 if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$nama = $_POST['nama'];
	$gambar = upload();
	$desk = $_POST['desk'];
	$lokasi = $_POST['lokasi'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama','$gambar','$desk','$lokasi',null)");

		if ($tambah>0) {
			echo "<center>";
			echo "data berhasil ditambahkan";
			echo "<br>";
			echo "terimakasih telah menjadi warga yang baik";
			echo "<br>";
			echo "silahkan laporkan lagi jika ada fasilitas yang rusak";
			echo "<br>";
			echo "<br>";
			echo "klik ";
			echo "<a href='read.php'>disini</a>";
			echo "</center>";
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
		echo " bray";

		}
	

 ?>