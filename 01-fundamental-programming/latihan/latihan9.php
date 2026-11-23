<?php

$nama = "admin";
$menu = 1;

switch ($menu) {
    case 1:
        $kegiatan = "Tambah data";
        break;
    case 2:
        $kegiatan = "Lihat Data";
        break;
    case 3:
        $kegiatan = "Edit Data";
        break;
    case 4:
        $kegiatan = "Hapus Data";   
        break;
    case 5:
        $kegiatan = "Keluar";
        break;
    default:
        $kegiatan = "Menu tidak valid";
}

echo "=== MENU ===" . PHP_EOL;
echo "Nama: " . $nama . PHP_EOL;
echo "Pilihan: " . $kegiatan . PHP_EOL;