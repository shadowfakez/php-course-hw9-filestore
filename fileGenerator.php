<?php

$file = fopen('data.csv', 'w');
fwrite($file, 'ID,NAME' . PHP_EOL);

for ($i = 1; $i < 100; $i++) {
    fwrite($file, $i . ',' . uniqid() . PHP_EOL);
}

exit();