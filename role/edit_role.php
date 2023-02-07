<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$id = $_POST['id'];
$nama = $_POST['nama'];

$conn->query("UPDATE role SET nama = '" . $nama . "' WHERE id_role = " . $id);

header('Content-Type: application/json');
