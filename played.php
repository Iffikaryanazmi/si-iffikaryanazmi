 <?php

 require_once "app/played.php";

 $kat = new played();
 $rows = $kat->tampil();

 ?>
 <h2><center>DATA PLAYED</h2></center>
 <form action="" method="post">
 	<table>
 		<tr>
 			<th><center>ARTIST</th></center>
 			<th><center>ALBUM</th></center>
 			<th><center>TRACK</th></center>
 			<th><center>PLAYED</th></center>
      		<th><center>EDIT</th></center>
      		<th><center>HAPUS</th></center>
 		</tr>

 		<?php foreach ($rows as $row) { $id = $row['played']; ?>

 			<tr>
 				
 				<td><center><?php echo $row['artist_id']; ?></td></center>
 				<td><center><?php echo $row['album_id']; ?></td></center>
 				<td><center><?php echo $row['track_id']; ?></td></center>
 				<td><center><?php echo $row['played']; ?></td></center>
        
         <td><center><input type="submit" name="edit <?php echo $id ?>" value="EDIT"></center></td>
				<?php
						if (isset($_POST['edit'.$id])) {
								header("Location: index.php?halaman=played_edit.php&id=$id");
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
        header("Location: index.php?halaman=played_input.php");
      }
  ?>
</form>
