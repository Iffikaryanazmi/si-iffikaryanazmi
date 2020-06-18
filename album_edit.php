<?php

 require_once "app/album.php";
 
 $id = $_GET['id'];
 $kat = new album();
 $row = $kat->edit($id);
 if (isset($_POST['tsimpan'])){
   $kat->simpan($id);
 }
 if (isset($_POST['thapus']))
 {
   $kat = new album();
   $kat->hapus($id);
 }

 ?>
<h2><center>EDIT DATA ALBUM</h2></center>
<form action="" method ="POST">
	<table>
		<tr>
			<th>ARTIST</th>
			<td><input type="text" name="iartist" value="<?php echo $row['artist_id']; ?>"></td>
		</tr>
    
       <tr> 
			<th>NAMA ALBUM</th>
			<td><input type="text" name="inamal" value="<?php echo $row['album_name']; ?>"></td>
		</tr>
    
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="UBAH">
			   <input type="submit" name="thapus" value="HAPUS">
			</td>

		</tr>
	</table>
