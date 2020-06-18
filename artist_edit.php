<?php

 require_once "app/artist.php";
 $id = $_GET['id'];
 $kat = new artist();
 $row = $kat->edit($id);
 if (isset($_POST['tsimpan'])){
   $kat = new artist();
   $kat->simpan($id);
 }
 if (isset($_POST['thapus']))
 {
   $kat = new artist();
   $kat->hapus($id);
 }

 ?>
<h2><center>EDIT DATA ARTIS</h2></center>
<form action="" method ="POST">
	<table>
		<tr>
			<th>NAMA</th>
			<td><input type="text" name="inama" value="<?php echo $row['artist_name']; ?>"></td>
		</tr>
    
		<tr>
			<th></th>
			<td>
			  <input type="submit" name="tsimpan" value="UBAH">  
			  <input type="submit" name="thapus" value="HAPUS"></td>

		</tr>
	</table>
