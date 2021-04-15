<?php

require_once 'koneksi.php';

$namabagian = $_GET['namabagian'];

$sql = "INSERT INTO `table_bagian` VALUES ('', '$namabagian')";

$conn->query($sql);
