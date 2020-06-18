<?php
include "koneksi.php";
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS PAK SUENDRI</title>
    <link rel="stylesheet" href="layout/assets/css/login.css">
</head>

<body>
    <div class="kotak">
        <?php
            if(isset($_GET['ko']))
            {
                if($_GET['ko']=='gagal')
                {
                    echo "<h4>Password dan Username anda Salah</h4>";
                    header('Refresh: 2; URL=login.php');
                }

                if($_GET['ko']=='log')
                {
                    echo "<h4>Anda Telah keluar dari laman</h4>";
                    header('Refresh: 2; URL=login.php');
                }
            }
        ?>
        <p class="tulisan">Silahkan Login</p>
        <form action="" method="POST">
            <p><label for="">Username</label>
            <input type="text" name="nama_user" class="form_login" placeholder="isi username"></p>

            <label for="">Password</label>
            <input type="password" name="pass_user" class="form_login" placeholder="***********">

            <input type="submit" name="login" class="tombol_login" value="MASUK">
            <br>
            <br>
        </form>
        <?php

        if (isset($_POST['login'])) {
            $user_username = $_POST['nama_user'];
            $user_password = $_POST['pass_user'];
            $sql_load_admin = $koneksi->prepare("SELECT * FROM tb_admin WHERE nama_admin = '$nama_user' AND pass_admin ='$pass_user'");
            $sql_load_admin->execute();
            if ($sql_load_admin->rowCount() > 0)
            {
                $data_load_admin = $sql_load_admin->fetchAll();
                foreach ($data_load_admin as $rows_admin) {
                    $_SESSION['id_admin'] = $rows_admin['id_admin'];
                    $_SESSION['nama_user'] = $rows_admin['nama_user'];
                    $_SESSION['pass_user'] = $rows_admin['pass_user'];
                    header('location: index.php');
                }
            }else
            {
                header('location:login.php?ko=gagal');
            }
        }



        ?>
    </div>
</body>

</html>