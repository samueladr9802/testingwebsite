<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_aplikasipenduduk";

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
