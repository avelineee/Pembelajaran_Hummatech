<?php

echo "===LATIHAN 1===" . PHP_EOL;
function HitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

$hasil = HitungLuas(5, 10);
echo "Luas persegi panjang: " . $hasil;

echo PHP_EOL;

function HitungKeliling($panjang, $lebar) {
    return 2 * ($panjang + $lebar);
}

$hasil = HitungKeliling(5, 10);
echo "Keliling persegi panjang: " . $hasil;


echo PHP_EOL;
echo "===LATIHAN 2===" . PHP_EOL;
function sapaPengguna($nama = "Pengunjung") {
    echo "Halo, $nama! Selamat datang di program PHP." . PHP_EOL;
}

sapaPengguna("Alice");
sapaPengguna();
sapaPengguna("Dina");

echo PHP_EOL;
echo "===LATIHAN 3===" . PHP_EOL;
function hitungDiskon($harga, $diskon) {
    $nominalDiskon = $harga * ($diskon / 100);
    return $harga - $nominalDiskon;
}

$hargaAwal = 100000;
$diskon = hitungDiskon($hargaAwal, 20);
$hargaAkhir = hitungDiskon($hargaAwal, 20);
echo "Harga awal: " . $hargaAwal;
echo PHP_EOL;
echo "Diskon: " . $diskon;
echo PHP_EOL;
echo "Harga setelah diskon: " . $hargaAkhir;

echo PHP_EOL;


echo "===LATIHAN 4===" . PHP_EOL;
$nama = "Aveline";
function tampilkanNama($nama) {
    echo "Nama: " . $nama;
}
tampilkanNama($nama);
