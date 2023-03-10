<?php

header('Access-Control-Allow-Origin: *');
require_once("../conn.php");
mysqli_connect_errno();
date_default_timezone_set('Asia/Jakarta');

$id_type = $_GET['id_type'];

$json = array();

$sql = $conn->query("SELECT * FROM berita WHERE id_type = $id_type ORDER BY tanggal DESC");
$jml = $sql->num_rows;
if ($jml > 0) {
    while ($data = $sql->fetch_object()) {
        $arr_row = array();
        $arr_row['id'] = $data->id_berita;
        $arr_row['judul'] = $data->judul;
        $arr_row['tanggal'] = $data->tanggal;
        $arr_row['isi'] = $data->isi;
        $arr_row['media'] = $data->media;
        $arr_row['totalView'] = $data->total_view;
        $arr_row['kategori'] = $data->id_kategori;
        $arr_row['tag'] = $data->id_tag;
        $arr_row['type'] = $data->id_type;
        $arr_row['user'] = $data->id_user;
        // $arr_row['total_view'] = $data->total_view;
        $json[] = $arr_row;
    }
} else {
    $json[] = "Error";
}

header('Content-Type: application/json');
print json_encode($json, JSON_PRETTY_PRINT);
