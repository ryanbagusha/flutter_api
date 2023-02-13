<?php

header('Access-Control-Allow-Origin: *');
require_once("../conn.php");
mysqli_connect_errno();
date_default_timezone_set('Asia/Jakarta');

$json = array();

$sql = $conn->query("SELECT role.id_role, role.nama, role.harga, COUNT(*) AS jumlah_post, SUM(role.harga) AS total_harga FROM berita NATURAL JOIN user NATURAL JOIN role WHERE NOT role.id_role = 1 GROUP BY id_role;");
$jml = $sql->num_rows;
if ($jml > 0) {
    while ($data = $sql->fetch_object()) {
        $arr_row = array();
        $arr_row['id'] = $data->id_role;
        $arr_row['nama'] = $data->nama;
        $arr_row['harga'] = $data->harga;
        $arr_row['jumlah_post'] = $data->jumlah_post;
        $arr_row['total_harga'] = $data->total_harga;
        $json[] = $arr_row;
    }
} else {
    $json[] = "Error";
}

header('Content-Type: application/json');
print json_encode($json, JSON_PRETTY_PRINT);
