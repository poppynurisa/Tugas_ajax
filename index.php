<?php 
require 'koneksi.php';
 
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>sinus public</title>
  
</head>
<body>
<div id="kanan">
	<br><br> 
	 <form id="form-container" class="form-container">

	    <center>	
	    <input type="text" id="input" placeholder="search wikipedia">
	    <button id="submit-btn" class="">submit</button>
	 	<div class="wikipedia-container">
        	<h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
        	<ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
    	</div>
    	</center>
</div>   


<div id="kiri">
	<center>
    <h1>Layanan Masyarakat</h1>

    <br>
    <h3>Selamat datang di website pengaduan fasilitas publik</h3>
    <h3>Sinus City</h3>
    <br>
    <button><a href="register.php">Login</a></button>
    <br>	<br>	
    </center>
</div>

<style type="text/css">
	#kanan {width: 30%; height: 100%; float: right; background-color: lightgrey}
	#kiri {width: 70%; height: 100%; float: left; background-color: darkgrey}
</style>

	</form>
	 	<script src="jquery.min.js"></script>
	    <script src="script.js"></script>
	    <script src="bootstrap.min.js"></script>
	    <script src="docs.min.js"></script>
  </body>
</html>
