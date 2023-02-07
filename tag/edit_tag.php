<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

$conn->query("UPDATE tag SET nama = '" . $nama . "', deskripsi = '" . $deskripsi . "' WHERE id_tag = " . $id);

header('Content-Type: application/json');
