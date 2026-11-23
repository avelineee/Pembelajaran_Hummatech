<?php

for ($i = 1; $i <= 20; $i++) {

if ($i == 17) {
    break;
}

    if ($i % 3 == 0) {
        continue;
    }
    echo $i . PHP_EOL;

}