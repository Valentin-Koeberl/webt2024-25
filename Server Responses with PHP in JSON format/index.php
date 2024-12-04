<?php
include_once 'seeder.php';

// OST-Daten laden
$ost_list = Seeder::getData();

// Abfrageparameter
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

header('Content-Type: application/json');

if ($id === 0) {
    // Alle OSTs zurückgeben, wenn keine bestimmte ID angefordert wird
    $all_osts = array_map(function($ost) {
        return $ost->jsonSerialize();
    }, $ost_list);
    echo json_encode($all_osts);
} else {
    // Spezifisches OST zurückgeben, wenn eine ID angegeben wird
    foreach ($ost_list as $ost) {
        if ($ost->jsonSerialize()['id'] == $id) {
            echo json_encode($ost->jsonSerialize());
            exit;
        }
    }
    echo json_encode(['error' => 'OST nicht gefunden']);
}