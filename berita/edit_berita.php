<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$id = $_POST['id'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$media = $_POST['media'];
$kategori = $_POST['kategori'];
$tag = $_POST['tag'];

$conn->query("UPDATE berita SET judul = '" . $judul . "', tanggal = '" . $tanggal . "', isi = '" . $isi . "', media = '" . $media . "', id_kategori = '" . $kategori . "', id_tag = '" . $tag . "' WHERE id_berita = " . $id);

header('Content-Type: application/json');
