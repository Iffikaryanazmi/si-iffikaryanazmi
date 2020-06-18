<?php
require_once "app/artist.php";

$kat = new artist();

$dat1 = $kat->tampil();

if (isset($_POST['tsimpan'])) {
	$kat->input();
}

?>
<h2><center>INPUT DATA ARTIS</h2></center>
	<table>
<form action="" method="POST">
		
		
		<tr>
			<th>NAMA ARTIST</th>
			<td><input type="text" name="inama"></td>
		</tr>
		
		<tr>
			<th></th>
			<td><input type="submit" name="tsimpan" value="TAMBAHKAN"></td>
		</tr>
	</table>
</form>