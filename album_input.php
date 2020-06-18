<?php
require_once "app/album.php";
require_once "app/artist.php";

$kat = new album();
$artist = new artist();
$dat1 = $artist->tampil();

if (isset($_POST['tsimpan'])) {
	$kat = new album();
	$kat->input();
}

?>
<h2><center>INPUT DATA ALBUM</h2></center>
	<table>
<form action="" method="POST">
		<tr>
			<th>ARTIST</th>
			<td>
				<select name="iartist">
					<?php foreach ($dat1 as $row ) { ?>
					<option value="<?php echo $row['artist_id']; ?>"><?php echo $row['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="inamal"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="TAMBAHKAN"></td>
		</tr>
	</table>
</form>
