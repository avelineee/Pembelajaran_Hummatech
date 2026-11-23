
<?php

echo "=== BREAK ===" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {

    if ($i == 7) {
        break;
    }

    echo $i . PHP_EOL;
}




echo "=== CONTINUE ===" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        continue;
    }

    echo $i . PHP_EOL;
}
