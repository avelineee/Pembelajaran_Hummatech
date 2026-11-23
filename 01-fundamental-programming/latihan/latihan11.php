<?php

$siswa = [
    [
        "nama" => "Aveline",
        "nilai" => 90
    ],
    [
        "nama" => "Budi",
        "nilai" => 65
    ],
    [
        "nama" => "Citra",
        "nilai" => 85
    ],
    [
        "nama" => "Dina",
        "nilai" => 70
    ]
];

$jumlahSiswa = count($siswa);
$jumlahLulus = 0;

echo "=== LAPORAN NILAI SISWA ===" . PHP_EOL;

foreach ($siswa as $data) {

    if ($data["nilai"] >= 75) {
        $status = "LULUS";
        $jumlahLulus++;
    } else {
        $status = "TIDAK LULUS";
    }

    echo "Nama: " . $data["nama"] . PHP_EOL;
    echo "Nilai: " . $data["nilai"] . PHP_EOL;
    echo "Status: " . $status . PHP_EOL;
    echo "---------------------" . PHP_EOL;
}

echo "=== RINGKASAN ===" . PHP_EOL;
echo "Jumlah siswa: " . $jumlahSiswa . PHP_EOL;
echo "Jumlah siswa lulus: " . $jumlahLulus . PHP_EOL;
echo "Jumlah siswa tidak lulus: " . ($jumlahSiswa - $jumlahLulus) . PHP_EOL;