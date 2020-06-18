<link rel="stylesheet" href="assets/css/main.css">
<div align='center'>
  <div class="we">
    <img src="assets/images/login.png" alt="">
  </div>

<?php

   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $koneksi->prepare("SELECT * FROM user WHERE username = ?");
   $query->execute(array($username));
   if($query->rowCount() != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Kembali</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih Ada Data Yang Kosong! <a href='daftar.php'>Back</a>";
     } else {
       $sql = $koneksi->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
       $simpan = $sql->execute(array($username, $pass));
       if($simpan)
        {
         echo "<div align='center'>Pendaftaran Sukses! Silahkan <a href='login.php'>Login </a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>
