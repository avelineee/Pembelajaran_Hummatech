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

function tentukanStatus($nilai) {

    if ($nilai >= 75) {
        return "LULUS";
    }

    return "TIDAK LULUS";
}

function tampilkanSiswa($nama, $nilai) {

    $status = tentukanStatus($nilai);

    echo "Nama: " . $nama . PHP_EOL;
    echo "Nilai: " . $nilai . PHP_EOL;
    echo "Status: " . $status . PHP_EOL;
    echo "-------------------" . PHP_EOL;
}

echo "=== DATA SISWA ===" . PHP_EOL;

foreach ($siswa as $data) {

    tampilkanSiswa(
        $data["nama"],
        $data["nilai"]
    );

}