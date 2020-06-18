<?php
class album {
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
			$sql = "SELECT * FROM tb_album";
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
			$sql = "SELECT * FROM tb_album WHERE album_id=:id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			$data = $stmt->fetch();
			return $data;
		}
	public function simpan(string $id)
		{
			$sql2 = "UPDATE tb_album SET album_name=:album_name where album_id=:id";
			$stmt2 = $this->db->prepare($sql2);
			$stmt2 -> bindParam(":id", $id);
			$stmt2 -> bindParam(":album_name", $_POST['inamal']);
			$stmt2 -> execute();
			header("Location: index.php?halaman=album.php");
		}
	public function hapus(string $id)
		{
			$sql3 = "DELETE FROM tb_album WHERE album_id=:id";
			$stmt3 = $this->db->prepare($sql3);
			$stmt3-> bindParam(":id",$id);
			$stmt3-> execute();
			header("Location: index.php?halaman=album.php");
		}
	public function input()
		{
			$sql5 = "INSERT INTO tb_album VALUES (:artist_id, NULL, :album_name)";
			$stmt5 = $this->db->prepare($sql5);
			$stmt5->bindParam(":artist_id", $_POST['iartist']);
			$stmt5->bindParam(":album_name", $_POST['inamal']);
			$stmt5->execute();
			header("Location: index.php?halaman=album.php");
		}
	}