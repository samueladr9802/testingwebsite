<?php
require_once 'koneksi.php';

$namabagian = $_GET['namabagian'];
$subpertanyaan = $_GET['subpertanyaan'];
$indikator = $_GET['indikator'];
$tipepilihan = $_GET['tipepilihan'];

$sql = "SELECT * FROM table_pertanyaan WHERE id_pertanyaan = '$namabagian'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $idpertanyaan = $row['id_pertanyaan'];

        $sqlsubpertanyaan = "INSERT INTO `table_kuisioner` VALUES (NULL, '$idpertanyaan', '$subpertanyaan', '$indikator', '$tipepilihan')";

        $conn->query($sqlsubpertanyaan);
    }
}
