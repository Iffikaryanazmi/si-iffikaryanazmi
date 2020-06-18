<?php
include "koneksi.php";
session_start();
unset($SESSION['id_admin']);
unset($SESSION['nama_admin']);
unset($SESSION['pass_admin']);
session_destroy();
header('location:login.php?ko=log');
