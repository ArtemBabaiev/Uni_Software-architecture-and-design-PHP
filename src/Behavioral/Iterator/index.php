<?php

use Artem\Patterns\Behavioral\Iterator\Classes\Catalog;

require '../../../vendor/autoload.php';

$catalog = new Catalog();
try {
    foreach ($catalog->getIterator() as $item) {
        echo $item . "\n";
    }
} catch (Exception $e) {
}