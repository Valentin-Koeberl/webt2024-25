<?php

require_once 'ost.php';
require_once 'seeder.php';

$data = Seeder::getData();

echo json_encode($data, JSON_PRETTY_PRINT);
