<?php

require_once 'ost.php';

$ost1 = new OST(1, "The Legend of Zelda: Ocarina of Time OST", "The Legend of Zelda: Ocarina of Time", 1998);
$ost1->addSong(new Song(1, "Main Theme", "Koji Kondo", 1, 120));
$ost1->addSong(new Song(2, "Zelda's Lullaby", "Koji Kondo", 2, 90));

$ost2 = new OST(2, "Final Fantasy VII OST", "Final Fantasy VII", 1997);
$ost2->addSong(new Song(1, "Opening - Bombing Mission", "Nobuo Uematsu", 1, 162));
$ost2->addSong(new Song(2, "Aerith's Theme", "Nobuo Uematsu", 2, 240));

$ost_list = [$ost1, $ost2];

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

header('Content-Type: application/json');

if ($id === 0) {
    // Return all OSTs if no specific ID is requested
    $all_osts = array_map(function($ost) {
        return $ost->toArray();
    }, $ost_list);
    echo json_encode($all_osts);
} else {
    // Return the specific OST if an ID is provided
    foreach ($ost_list as $ost) {
        if ($ost->toArray()['id'] == $id) {
            echo json_encode($ost->toArray());
            exit;
        }
    }
    echo json_encode(['error' => 'OST not found']);
}
?>
