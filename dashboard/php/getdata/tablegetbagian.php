<?php

include_once 'php/koneksi.php';

$sql = "SELECT a.nama_bagian, b.pertanyaan, b.indikator, b.tipe_pilihan,c.sub_pertanyaan,c.indikator,c.tipe,
                    (SELECT COUNT(*) 
                    FROM table_pertanyaan 
                    WHERE id_bagian = a.id_bagian) as banyak_pertanyaan
                    FROM table_bagian as a
                    INNER JOIN table_pertanyaan as b ON a.id_bagian = b.id_bagian
                    INNER JOIN table_kuisioner as c ON a.id_bagian=c.id_bagian";

$stmt = $pdo->query($sql);
$current_cat = null;
$current_data = null;


while ($row = $stmt->fetch()) {
    if ($row["nama_bagian"] != $current_cat && $row["pertanyaan"] != $current_data) {
        $current_cat = $row["nama_bagian"];
        $current_data = $row["pertanyaan"];
        $bagian = explode(" ", $current_cat);
        $nomor = 1;
        echo "
        <thead>
            <tr>
                <th colspan='3' class='text-center'>$current_cat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>" . $bagian[1] . $nomor++ . "</th>
                <th>" . $row['pertanyaan'] . "</th>
                <th>" . $row['indikator'] . "</th>
            </tr>
        ";
    }
    echo "
            <tr>
                <th></th>
                <th>" . $row['sub_pertanyaan'] . "</th>
                <th></th>
            </tr>
        </tbody>
    ";
}
