<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
$berita = $_POST['berita'];
$user = $_POST['user'];

$conn->query("INSERT INTO komentar (nama, komentar, id_berita, id_user) VALUES ('" . $nama . "', '" . $komentar . "', '" . $berita . "', '" . $user . "')");

header('Content-Type: application/json');
