<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];

$conn->query("INSERT INTO user (nama, email, username, password, id_role) VALUES ('" . $nama . "', '" . $email . "', '" . $username . "', '" . $password . "', '" . $role . "')");

header('Content-Type: application/json');
