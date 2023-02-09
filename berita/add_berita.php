<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$media = $_POST['media'];
$total_view = $_POST['total_view'];
$kategori = $_POST['kategori'];
$tag = $_POST['tag'];
$type = $_POST['type'];
$user = $_POST['user'];

$conn->query("INSERT INTO berita (judul, tanggal, isi, media, total_view, id_kategori, id_tag, id_type, id_user) VALUES ('" . $judul . "', '" . $tanggal . "', '" . $isi . "', '" . $media . "', '" . $total_view . "', '" . $kategori . "', '" . $tag . "', '" . $type . "', '" . $user . "')");

header('Content-Type: application/json');
