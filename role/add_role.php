<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$nama = $_POST['nama'];
$conn->query("INSERT INTO role (nama) VALUES ('" . $nama . "')");

header('Content-Type: application/json');
