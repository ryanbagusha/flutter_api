<?php

header('Access-Control-Allow-Origin: *');
require_once("../conn.php");
mysqli_connect_errno();
date_default_timezone_set('Asia/Jakarta');

$json = array();

$sql = $conn->query("SELECT * FROM berita WHERE id_type = 1");
$jml = $sql->num_rows;
if ($jml > 0) {
    while ($data = $sql->fetch_object()) {
        $arr_row = array();
        $arr_row['id'] = $data->id_berita;
        $arr_row['judul'] = $data->judul;
        $arr_row['tanggal'] = $data->tanggal;
        // $arr_row['isi'] = $data->isi;
        $arr_row['media'] = $data->media;
        // $arr_row['total_view'] = $data->total_view;
        $json[] = $arr_row;
    }
} else {
    $json[] = "Error";
}

header('Content-Type: application/json');
print json_encode($json, JSON_PRETTY_PRINT);
