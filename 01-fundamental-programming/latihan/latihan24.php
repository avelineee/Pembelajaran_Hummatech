<?php
//LATIHAN 24 - KONSTANTA
const NAMA_TOKO = "Aveline Store";
const ALAMAT_TOKO = "Malang, Indonesia";
const TAHUN_BERDIRI = 2020;

define("STORE_CATEGORY", "Fashion & Lifestyle");

$namaPemilik = "Aveline";
$jumlahProduk = 25; 
$statusToko = "Aktif";

echo "=== INFORMASI TOKO ===" . PHP_EOL;

echo "Nama Toko: " . NAMA_TOKO . PHP_EOL;
echo "Alamat: " . ALAMAT_TOKO . PHP_EOL;
echo "Tahun Berdiri: " . TAHUN_BERDIRI . PHP_EOL;
echo "Kategori: " . STORE_CATEGORY . PHP_EOL;
echo "Nama Pemilik: " . $namaPemilik . PHP_EOL;
echo "Jumlah Produk: " . $jumlahProduk . PHP_EOL;
echo "Status Toko: " . $statusToko . PHP_EOL;
