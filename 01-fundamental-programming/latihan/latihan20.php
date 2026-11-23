<?php

function hitungPembagian($angka1, $angka2) {

    if ($angka2 == 0) {
        throw new InvalidArgumentException("Pembagi tidak boleh nol.");
    }

    return $angka1 / $angka2;
}

$angka1 = 10;
$angka2 = 2;

try {

    $hasil = hitungPembagian($angka1, $angka2);

    echo "Hasil pembagian: " . $hasil . PHP_EOL;

} catch (InvalidArgumentException $e) {

    echo "Terjadi kesalahan: " . $e->getMessage() . PHP_EOL;

} finally {

    echo "Program kalkulator selesai." . PHP_EOL;

}