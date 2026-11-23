<?php
// DATA YANG DIMASUKKAN PENGGUNA
$email = "aveline@gmail.com";
$password = "12345678";

// DATA AKUN YANG TERDAFTAR
$emailTerdaftar = "aveline@gmail.com";
$passwordBenar = "12345678";

// PROSES VALIDASI LOGIN
if ($email === $emailTerdaftar && $password === $passwordBenar) {
    echo "Login Berhasil" . PHP_EOL;

} elseif ($email !== $emailTerdaftar && $password !== $passwordBenar) {
    echo "Email dan Password salah" . PHP_EOL;

} elseif ($email !== $emailTerdaftar) {
    echo "Email salah" . PHP_EOL;

} else {
    echo "Password salah" . PHP_EOL;
}

// MENAMPILKAN INFORMASI
echo "=== LOGIN AKUN ===" . PHP_EOL;
echo "Email: " . $email . PHP_EOL;