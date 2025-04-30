<?php
$data = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
];

function hitungNilaiAkhir($uts, $uas) {
    return round(0.4 * $uts + 0.6 * $uas, 1);
}

function konversiHuruf($nilai) {
    if ($nilai > 80) return 'A';
    if ($nilai >= 70) return 'B';
    if ($nilai >= 60) return 'C';
    if ($nilai >= 50) return 'D';
    return 'E';
}

echo "<table border='1' cellpadding='13' cellspacing='0'>
        <tr style ='background-color: #d3d3d3'>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>";

foreach ($data as $mhs) {
    $nilaiAkhir = hitungNilaiAkhir($mhs['uts'], $mhs['uas']);
    $huruf = konversiHuruf($nilaiAkhir);
    echo "<tr>
            <td>{$mhs['nama']}</td>
            <td>{$mhs['nim']}</td>
            <td>{$mhs['uts']}</td>
            <td>{$mhs['uas']}</td>
            <td>$nilaiAkhir</td>
            <td>$huruf</td>
          </tr>";
}

echo "</table>";
?>