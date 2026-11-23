<?php
$umur = 18;
$SudahDaftar = true;
$MemenuhiSyarat = $umur >= 17 && $SudahDaftar == true;
echo "Apakah saya memenuhi syarat untuk mengikuti lomba? " . ($MemenuhiSyarat ? "Ya" : "Tidak") . PHP_EOL;

var_dump ($MemenuhiSyarat);