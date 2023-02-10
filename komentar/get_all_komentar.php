<?php

header('Access-Control-Allow-Origin: *');
require_once("../conn.php");
mysqli_connect_errno();
date_default_timezone_set('Asia/Jakarta');

$json = array();

$sql = $conn->query("SELECT * FROM komentar");
$jml = $sql->num_rows;
if ($jml > 0) {
    while ($data = $sql->fetch_object()) {
        $arr_row = array();
        $arr_row['id'] = $data->id_komentar;
        $arr_row['nama'] = $data->nama;
        $arr_row['komentar'] = $data->komentar;
        $arr_row['id_berita'] = $data->id_berita;
        $arr_row['id_user'] = $data->id_user;
        $json[] = $arr_row;
    }
} else {
    $json[] = "Error";
}

header('Content-Type: application/json');
print json_encode($json, JSON_PRETTY_PRINT);
