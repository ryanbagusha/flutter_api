<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
$berita = $_POST['berita'];
$user = $_POST['user'];

$conn->query("UPDATE komentar SET nama = '" . $nama . "', komentar = '" . $komentar . "', id_berita = '" . $berita . "', id_user = '" . $user . "' WHERE id_komentar = " . $id);

header('Content-Type: application/json');
