<?php
//set time zone
date_default_timezone_set("Asia/Bangkok");

// Koneksi
$host = "172.17.0.2";
$user = "root";
$pass = "1234";
$db   = "db_berita";

$mysqli = new mysqli($host, $user, $pass, $db, 8080);

if ($mysqli->connect_errno) {
    echo "Koneksi Gagal !" . $mysqli->connect_errno;
}
