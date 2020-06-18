 <?php

 require_once "app/track.php";

 $kat = new track();
 $rows = $kat->tampil();

 ?>
 <h2><center>DATA TRACK</h2></center>
<form  method="post">
 	<table>
 		<tr>
 			<th><center>ID TRACK</th></center>
 			<th><center>NAMA TRACK</th></center>
 			<th><center>ID ARTIST</th></center>
 			<th><center>ID ALBUM</th></center>
 			<th><center>TIME</th></center>
      		<th><center>EDIT</th></center>
      		<th><center>HAPUS</th></center>
 		</tr>

 		<?php foreach ($rows as $row) { $id = $row['track_id']; ?>

 			<tr>
 				<td><center><?php echo $row['track_id']; ?></td></center>
 				<td><center><?php echo $row['track_name']; ?></td></center>
 				<td><center><?php echo $row['artist_id']; ?></td></center>
 				<td><center><?php echo $row['album_id']; ?></td></center>
 				<td><center><?php echo $row['time']; ?></td></center>
 			  
         <td><center><input type="submit" name="edit<?php echo $id ?>" value="EDIT"></td></center>
				<?php
						if (isset($_POST['edit'.$id])) {
								header("Location: index.php?halaman=track_edit.php&id=$id");
							}

				 ?>
		<td><center><input type="submit" value="HAPUS" name="thapus<?php echo $id ?>"></center></td>
				<?php
				if (isset($_POST['thapus'.$id]))
				{
          $kat->hapus($id);
				}
				?>
      </td>
 		</tr>

 		<?php } ?>
 	</table>
  <center><input type="submit" name="tam" value="INPUT DATA"></center>
  <?php
    if (isset($_POST['tam'])) {
        header("Location: index.php?halaman=track_input.php");
      }
  ?>
</form>
