
<?php

$produk = [
    "Laptop",
    "Keyboard",
    "Mouse",
    "Monitor",
    "Headset"
];

$nomor = 1;

foreach ($produk as $item) {

    if ($item === "Laptop") {
        $label = "PRODUK UTAMA";
    } else {
        $label = "PRODUK LAINNYA";
    }

    echo $nomor . ". " . $item . " - " . $label . PHP_EOL;

    $nomor++;
}
