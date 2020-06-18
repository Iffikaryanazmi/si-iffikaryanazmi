<!DOCTYPE html>
<html>
<head>
	<title> Penjualan Musik Studio</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/template.css">
</head>
<body background="layout/assets/images/abuabu1.jpg"> 
	<div class="utama"> <!-- ini area utama-->
		
		<div class="kepala">
			
			<?php include "header.php"; ?>

		</div>
		<div class="menu">
			
			<?php include "menu.php"; ?>

		</div>
		<div class="isi">

			<?php 
					if (isset($_GET['halaman']))
					{
						include $_GET['halaman'];
					} else {
						include	"utama.php";
					}
			 ?>

		</div>
		<div class="footer">
			
			<?php include "footer.php"; ?>

		</div>

	</div> <!-- area utama sampai sini -->

</body>
</html>
