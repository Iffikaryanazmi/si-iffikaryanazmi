<?php
require_once "app/played.php";
require_once "app/artist.php";
require_once "app/album.php";
require_once "app/track.php";

$kat = new played();
$art = new artist();
$alb = new album();
$trc = new track();
$dat1 = $art->tampil();
$dat2 = $alb->tampil();
$dat3 = $trc->tampil();

if (isset($_POST['tsimpan'])) {
	$kat = new played();
	$kat->input();
}

?>
<h2><center>INPUT DATA PLAYED</h2></center>
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
			<th>ALBUM</th>
			<td>
				<select name="ialbum">
					<?php foreach ($dat2 as $row ) { ?>
					<option value="<?php echo $row['album_id']; ?>"><?php echo $row['album_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		
		<tr>
			<th>TRACK</th>
			<td>
				<select name="itrack">
					<?php foreach ($dat3 as $row ) { ?>
					<option value="<?php echo $row['track_id']; ?>"><?php echo $row['track_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>PLAYED</th>
			<td><input type="timestamp" name="played"></td>
		</tr>
		
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="TAMBAHKAN"></td>
		</tr>
	</table>
</form>
