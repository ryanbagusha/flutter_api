<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
require_once("../conn.php");

if ($_POST['password']) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    $conn->query("UPDATE user SET nama = '" . $nama . "', email = '" . $email . "', username = '" . $username . "', password = '" . $password . "', id_role = '" . $role . "' WHERE id_user = " . $id);
} else {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    $conn->query("UPDATE user SET nama = '" . $nama . "', email = '" . $email . "', username = '" . $username . "', id_role = '" . $role . "' WHERE id_user = " . $id);
}


header('Content-Type: application/json');
