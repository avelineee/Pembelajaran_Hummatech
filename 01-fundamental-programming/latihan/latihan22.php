<?php
function bagi($a, $b) {
    if ($b == 0) {
        throw new Exception("Pembagian dengan nol tidak diperbolehkan.");
    }
    return $a / $b;
}

try {
    $hasil = bagi(10, 0);

    echo "Hasil pembagian: " . $hasil . PHP_EOL;
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage() . PHP_EOL;
} finally {
    echo "Program selesai." . PHP_EOL;
}