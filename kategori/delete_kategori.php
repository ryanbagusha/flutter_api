<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$id = $_POST['id'];
$conn->query("DELETE FROM kategori WHERE id_kategori =" . $id);

header('Content-Type: application/json');