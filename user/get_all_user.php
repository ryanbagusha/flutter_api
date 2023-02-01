<?php

header('Access-Control-Allow-Origin: *');
require_once("../conn.php");
mysqli_connect_errno();
date_default_timezone_set('Asia/Jakarta');

$json = array();

$sql = $conn->query("SELECT user.*, role.nama AS role FROM user INNER JOIN role ON user.id_role = role.id_role");
$jml = $sql->num_rows;
if ($jml > 0) {
    while ($data = $sql->fetch_object()) {
        $arr_row = array();
        $arr_row['id'] = $data->id_user;
        $arr_row['nama'] = $data->nama;
        $arr_row['email'] = $data->email;
        $arr_row['username'] = $data->username;
        $arr_row['role'] = $data->role;
        // $arr_row['total_view'] = $data->total_view;
        $json[] = $arr_row;
    }
} else {
    $json[] = "Error";
}

header('Content-Type: application/json');
print json_encode($json, JSON_PRETTY_PRINT);
