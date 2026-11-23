<?php
//BAB 1
$nama = "Aveline Voleta Wardani";   //$=VARIABEL UNTUK MENYIMPAN NILAI
$umur = 18;
$sekolah = "SMK Telkom Malang";
$tinggi = 160.5;
$isStudent = true;
$hobi = ["membaca", "menulis", "traveling"];

echo "=== BIODATA SAYA ===" . PHP_EOL;  
echo "Nama: " . $nama . PHP_EOL;
echo "Umur: " . $umur . " tahun" . PHP_EOL;
echo "Sekolah: " . $sekolah . PHP_EOL;
echo "Tinggi: " . $tinggi . " cm" . PHP_EOL;
echo "status siswa: " . $isStudent . PHP_EOL;
echo "Hobi: " . implode(", ", $hobi) . PHP_EOL; //MENDEKLARASIKAN ARRAY

//BAB 2
echo PHP_EOL;
echo "=== CEK TIPE DATA ===" . PHP_EOL;
$nama = "Aveline"; 
$umur = 18;

var_dump($nama); //MENAMPILKAN TIPE DATA DAN NILAI
var_dump($umur);

//BAB 3
$nama = "Aveline";
$umur = 18;
$tinggi = 160.5;
$status = true;

echo PHP_EOL;
echo "=== CEK TIPE DATA DENGAN GETTYPE() ===" . PHP_EOL;
echo gettype($nama) . PHP_EOL; //MENDAPATKAN TIPE DATA DARI VARIABEL
echo gettype($umur) . PHP_EOL;
echo gettype($tinggi) . PHP_EOL;
echo gettype($status) . PHP_EOL;

?>
