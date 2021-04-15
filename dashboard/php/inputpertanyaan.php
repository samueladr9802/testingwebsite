<?php

require_once 'koneksi.php';

$namabagian = $_GET['namabagian'];
$pertanyaan = $_GET['pertanyaan'];
$indikator = $_GET['indikator'];
$tipepilihan = $_GET['tipepilihan'];

$sql = "SELECT * FROM table_bagian WHERE nama_bagian = '$namabagian'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $idbagian = $row['id_bagian'];

        $sqlpertanyaan = "INSERT INTO table_pertanyaan VALUES (NULL, '$idbagian', '$pertanyaan','$indikator','$tipepilihan')";

        $conn->query($sqlpertanyaan);
    }
}
