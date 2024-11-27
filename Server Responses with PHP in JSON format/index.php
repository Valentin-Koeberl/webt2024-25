<?php

require_once 'ost.php';
require_once 'seeder.php';

$data = Seeder::getData();


foreach ($data as $ost) {
    print_r( $ost);
}
