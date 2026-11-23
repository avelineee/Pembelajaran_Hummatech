<?php

function validasiNilai($nilai) {
    if ($nilai < 0 || $nilai > 100) {
        throw new InvalidArgumentException("Nilai harus antara 0 dan 100.");
    } else {
        return $nilai;
    }
}

$nilai = 85;
try {

    $hasil = validasiNilai($nilai);

    echo $nilai  . " : nilai valid". PHP_EOL;

} catch (InvalidArgumentException $e) {

    echo $nilai . " : nilai tidak valid " . $e->getMessage() . PHP_EOL;

} finally {

    echo "selesai" . PHP_EOL;

}

