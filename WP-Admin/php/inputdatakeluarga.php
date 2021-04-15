<?php

include_once 'koneksi.php';

$id_number = $_POST['identitynumber'];
$full_name = $_POST['fullname'];
$gender = $_POST['Gender'];
$born_city = $_POST['borncity'];
$family_status = $_POST['familystatus'];

if(isset($_POST['savedata'])){
        $formatdate = $_POST['birthday'];
        $sqldate = date("Y-m-d", strtotime($formatdate));

        $sql = "INSERT INTO `table_data` VALUES ('$id_number', '$full_name', '$gender', '$born_city', '$sqldate', '$family_status')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    
?>

