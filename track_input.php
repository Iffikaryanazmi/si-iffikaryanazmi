<?php
require_once "app/track.php";
require_once "app/artist.php";
require_once "app/album.php";
$kat = new track();
$artist = new artist();
$album = new album();
$dat1 = $artist->tampil();
$dat2 = $album->tampil();

if (isset($_POST['tsimpan'])) {
	$kat = new track();
	$kat->input();
}

?>
<h2><center>INPUT DATA TRACK</h2></center>
	<table>
<form action="" method="POST">

		<tr>
			<th>NAMA TRACK</th>
			<td><input type="text" name="iname"></td>
		</tr>
		<tr>
			<th>ID ARTIST</th>
			<td>
				<select name="idartist">
					<?php foreach ($dat1 as $row ) { ?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>ID ALBUM</th>
			<td>
				<select name="idalbum">
					<?php foreach ($dat2 as $row ) { ?>
					<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>TIME</th>
			<td><input type="text" name="itime"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="TAMBAHKAN"></td>
		</tr>
	</table>
</form>
