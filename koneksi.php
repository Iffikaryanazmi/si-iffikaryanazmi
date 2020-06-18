<?php

$dbhost = "localhost";
$dbname = "dbuts";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO("mysql:host=".$dbhost.";dbname=".$dbname."", $dbuser, $dbpass);