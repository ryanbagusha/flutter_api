<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$conn->query("INSERT INTO tag (nama, deskripsi) VALUES ('" . $nama . "', '" . $deskripsi . "')");

header('Content-Type: application/json');
