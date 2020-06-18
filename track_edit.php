<?php

 require_once "app/track.php";
 $id = $_GET['id'];
 $kat = new track();
 $row = $kat->edit($id);
 if (isset($_POST['tsimpan'])){
   $kat->simpan($id);
 }
 if (isset($_POST['thapus']))
 {
   $kat->hapus($id);
 }

 ?>
<h2><center>EDIT DATA TRACK</h2></center>
<form action="" method ="POST">
	<table>
		<tr>
			<th>ARTIST</th>
			<td><input type="text" name="iartist" value="<?php echo $row['artist_id']; ?>"></td>
		</tr>
    <tr>
			<th>ALBUM</th>
			<td><input type="text" name="ialbum" value="<?php echo $row['album_id']; ?>"></td>
		</tr>
    <tr>
			<th>NAMA TRACK</th>
			<td><input type="text" name="inatrack" value="<?php echo $row['track_name']; ?>"></td>
		</tr>
    
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="UBAH">   <input type="submit" name="thapus" value="HAPUS"></td>

		</tr>
	</table>
