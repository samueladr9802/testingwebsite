<?php
include_once 'koneksi.php';

$sql = "SELECT * FROM table_data";
$result = $conn->query($sql);
$nomor = 1;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $dateformat = $row['born_date'];
    $sqldate = date("d M Y", strtotime($dateformat));

    echo "<tr><td>$nomor</td><td>".$row["identity_number"]."</td><td>".$row["full_name"]."</td><td>".$row["gender"]."</td><td>".$row["borncity"].", ".$sqldate."</td><td>".$row["family_status"]."</td></tr>";
    $nomor++;
  }
} else {
  echo "0 results";
}
$conn->close();
?>