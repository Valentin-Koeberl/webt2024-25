<?php

require_once 'ost.php';
require_once 'seeder.php';

$data = new Seeder();

foreach ($data as $ost) {
    echo $ost;
}
