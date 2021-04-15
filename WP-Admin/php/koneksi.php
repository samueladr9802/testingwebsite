<?php 

$servername = "localhost";
$database = "db_aplikasipenduduk";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>