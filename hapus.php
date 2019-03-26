<?php 
require 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

$id = $_GET["id"];

if (hapus($id)>0) {
	echo "<center>";
			echo "data berhasil dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
			echo "</center>";
		}
	else
	{
			echo "data gagal dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
	


 ?>