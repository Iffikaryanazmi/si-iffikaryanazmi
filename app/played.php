<?php
class played {
	private $db;

	public function __construct()
	{
		try {
				$this->db =
				new PDO("mysql:host=localhost;dbname=dbuts", "root", "");
			} catch (PDOException $e) {
				die ("Error " . $e->getMessage());
			}
		}
		public function tampil()
		{
			$sql = "SELECT * FROM tb_played";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			$data = [];
			while ($rows = $stmt->fetch()) {
				$data[] = $rows;
			}
			return $data;
		}
			public function edit(string $id)
				{
					$sql = "SELECT * FROM tb_played WHERE played = :played  ";
					$stmt = $this->db->prepare($sql);
					$stmt->bindParam(":played", $id);
					$stmt->execute();
					$data = $stmt->fetch();
					return $data;
				}
		public function simpan(string $id)
				{
					$sql2 = "UPDATE tb_played SET artist_id = :artist, album_id = :album, track_id = :track  WHERE played = TIMESTAMP";
					$stmt2 = $this->db->prepare($sql2);
					$stmt2 -> bindParam(":artist", $_POST['iartist']);
					$stmt2 -> bindParam(":album", $_POST['ialbum']);
					$stmt2 -> bindParam(":track", $_POST['itrack']);
					$stmt2 -> bindParam(":TIMESTAMP", $id);
					$stmt2 -> execute();
					header("Location: index.php?halaman=played.php");
				}
					public function hapus(string $id)
						{
							$sql3 = "DELETE FROM tb_played WHERE played = :TIMESTAMP";
							$stmt3 = $this->db->prepare($sql3);
							$stmt3-> bindParam("id",$id);
							$stmt3-> execute();
							header("Location: index.php?halaman=played.php");
						}
						
						public function input(){
							$sql5 = "INSERT INTO tb_played VALUES (NULL, :artist,  :album, :track )";
							$stmt5 = $this->db->prepare($sql5);
							$stmt5->bindParam(":artist", $_POST['iartist']);
							$stmt5->bindParam(":album", $_POST['ialbum']);
							$stmt5->bindParam(":track", $_POST['itrack']);
							$stmt5->execute();
							header("Location: index.php?halaman=played.php");
						}
					}
