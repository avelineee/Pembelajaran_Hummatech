<?php

$nama = "Aveline Voleta";
$nilai = 85;

if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";   
}elseif ($nilai >= 80){
    $grade = "B";
}elseif ($nilai >= 70){
    $grade = "C";   
}elseif ($nilai >= 0){
    $grade = "D";
}else {
    $grade = "Nilai tidak valid";
}

if ($nilai >= 75 && $nilai <= 100) {
    $status = "LULUS";
} elseif ($nilai >= 0 && $nilai < 75) {
    $status = "TIDAK LULUS";
} else {
    $status = "NILAI TIDAK VALID";
}

echo "=== HASIL PENILAIAN ===" . PHP_EOL;
echo "Nama: " . $nama . PHP_EOL;
echo "Nilai: " . $nilai . PHP_EOL;
echo "Grade: " . $grade . PHP_EOL;
echo "Status: " . $status . PHP_EOL;
