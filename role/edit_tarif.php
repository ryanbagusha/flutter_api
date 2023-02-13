<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$id = $_POST['id'];
$harga = $_POST['harga'];

$conn->query("UPDATE role SET harga = '" . $harga . "' WHERE id_role = " . $id);

header('Content-Type: application/json');
