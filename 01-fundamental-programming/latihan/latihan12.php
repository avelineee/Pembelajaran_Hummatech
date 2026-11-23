<?php

echo "=== PERULANGAN 1-10 ===" . PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
}
echo PHP_EOL;

echo "=== PERULANGAN GENAP ===" . PHP_EOL;
for ($i = 1; $i <= 20; $i++) {

    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }

}
echo PHP_EOL;

echo "=== PERULANGAN MUNDUR ===" . PHP_EOL;
for ($i = 10; $i >= 1; $i--) {
    echo $i . PHP_EOL;
}