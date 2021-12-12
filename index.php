<?php

use iterator\FileStore;

include 'FileStore.php';

$file = new FileStore(__DIR__ . '/data.csv');

foreach($file as $key => $value) {
    echo $value[0] . ': ' . $value[1] . PHP_EOL;
}
