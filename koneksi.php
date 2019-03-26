<?php 
	
	$conn = mysqli_connect("localhost","root","","poppy");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$desk = htmlspecialchars($data["desk"]);

		$query = "UPDATE blog SET desk = '$desk' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}


	function upload() {

	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ad gmbr di inputkn
	if ($error === 4 ) {
		echo "<script>
					alert('pilih gambar terlebih dahulu !');</script>";
					return false;
	}
	//cek gambar atau bukan
	$ekstensigambarvalid = ['jpg','jpeg','png'];
	$ekstensigambar = explode('.', $namafile);
	$ekstensigambar = strtolower(end($ekstensigambar));

	if (! in_array($ekstensigambar, $ekstensigambarvalid))
	{
		echo "<script>
					alert('pilih gambar ajja cuyy ');</script>";
					return false;
	}

	//cek jika ukuran terlalu besar
	if ($ukuranfile > 2000000)
	{
		echo "<script>
					alert('ukuran gambar terlalu besar  ');</script>";
					return false;
	}

//lolos siap upload
	//generete nama baru
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensigambar;
	move_uploaded_file($tmpname, 'img/' . $namafilebaru);

	return $namafilebaru;




}

	// 	function upload (){
	// 	$nfiles = $_FILES['gambar']['name'];
	// 	$sfiles = $_FILES['gambar']['size'];
	// 	$error = $_FILES['gambar']['error'];
	// 	$tmpname = $_FILES['gambar']['tmp_name']; //tmpat penyimpanan sementara file
	

	// //file harus foto

	// $ekstensifotovalid = ['jpg','jpeg','png'];
	// $ekstensifoto = explode('.', '$nfiles');	//explode adalah fungsi diphp untuk memecah string menjadi array menggunakan delimiter
	// $ekstensifoto = strtolower(end($ekstensifoto)); //biar ekstn hruf kecil

	// if (!in_array($ekstensifoto, $ekstensifotovalid)) { //in_array untuk cek string di dalam array
	// 	echo "harus gambar";
	// }

	// //cek ukuran file
	// if ($sfiles > 2000000){
	// 	echo "file kegedean";
	// 	return false;
	// }

	// //generate nama file baru
	// $namafilebaru =uniqid();
	// $namafilebaru .='.';
	// $namafilebaru = $ekstensifoto;

	// move_uploaded_file($tmpname, 'img/'.$namafilebaru)
		
	// 	return $namafilebaru;
	// }




	// function creat ($data){
	// 	global $conn;

	// 	$judul = $data["judul"];
	// 	$isi = $data["isi"];

	// 	$query = "INSERT INTO blog VALUES ('','$judul', '$isi')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>