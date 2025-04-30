<?php
$data = [
    "Ridho" => [
        ["mata_kuliah" => "Pemrograman I", "sks" => 2],
        ["mata_kuliah" => "Praktikum Pemrograman I", "sks" => 1],
        ["mata_kuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
        ["mata_kuliah" => "Arsitektur Komputer", "sks" => 3]
    ],
    "Ratna" => [
        ["mata_kuliah" => "Basis Data I", "sks" => 2],
        ["mata_kuliah" => "Praktikum Basis Data I", "sks" => 1],
        ["mata_kuliah" => "Kalkulus", "sks" => 3]
    ],
    "Tono" => [
        ["mata_kuliah" => "Rekayasa Perangkat Lunak", "sks" => 3],
        ["mata_kuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
        ["mata_kuliah" => "Komputasi Awan", "sks" => 3],
        ["mata_kuliah" => "Kecerdasan Bisnis", "sks" => 3]
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        .RevisiKRS {
            background-color: red;
            text-align: center;
        }
        .TidakRevisi {
            background-color: green;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <tr style='background-color: #d3d3d3'>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data as $nama => $matkul_list) {
        $total_sks = array_sum(array_column($matkul_list, 'sks'));
        $keterangan = $total_sks < 7 ? "Revisi KRS" : "Tidak Revisi";
        $class = $total_sks < 7 ? "RevisiKRS" : "TidakRevisi";

        foreach ($matkul_list as $i => $matkul) {
            echo "<tr>";
            echo "<td>" . ($i === 0 ? $no : "") . "</td>";
            echo "<td>" . ($i === 0 ? $nama : "") . "</td>";
            echo "<td>{$matkul['mata_kuliah']}</td>";
            echo "<td>{$matkul['sks']}</td>";
            echo "<td>" . ($i === 0 ? $total_sks : "") . "</td>";
            echo "<td class='" . ($i === 0 ? $class : "") . "'>" . ($i === 0 ? $keterangan : "") . "</td>";
            echo "</tr>";
        }

        $no++;
    }
    ?>

</table>

</body>
</html>