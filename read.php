<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: index.php");
    exit;  
  } 
 
  $tampil = query ("SELECT * FROM blog");
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
</head>
<body>

<center>
  <br>
<button><a href="masyarakat.php">Tambah</a></button>
<button><a href="logout.php">Logout</a></button>
<br><br>
    <h2>data laporan masyarakat!</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>no</th>
    <th>nama pelapor</th>
    <th>gambar</th>
    <th>deskripsi</th>
    <th>lokasi</th>
    <th>waktu update</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td width="150"><?= $x["nama"] ?></td>
    <td><img src="img/<?= $x["gambar"];?>" width="70"></td>
    <td width="500"><?= $x["desk"];?></td>
    <td width="130"><?= $x["lokasi"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<br>
<button style="background: transparent; border: none !important; color: white;"><a href="admin.php">admin</a></button>
</center>
  </body>
</html>
