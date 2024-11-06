<?php
include_once 'ost.php';
include_once 'song.php';

$ost1 =
$ost1->addSong(new Song(1, "Main Theme", "Koji Kondo", 1, 120));
$ost1->addSong(new Song(2, "Zelda's Lullaby", "Koji Kondo", 2, 90));
$ost1->addSong(new Song(3, "Link Disstrack", "Koji Kondo", 3, 50));
$ost1->addSong(new Song(4, "Zelda's Lullaby", "Koji Kondo", 4, 90));

$ost2 = new OST(2, "Final Fantasy VII OST", "Final Fantasy VII", 1997);
$ost2->addSong(new Song(1, "Opening - Bombing Mission", "Nobuo Uematsu", 1, 162));
$ost2->addSong(new Song(2, "Aerith's Theme", "Nobuo Uematsu", 2, 240));
$ost2->addSong(new Song(3, "Aerial Flip", "Nobuo Uematsu", 3, 60));
$ost2->addSong(new Song(4, "End Boss", "Nobuo Uematsu", 4, 140));

$ost3 = new OST(3, "Mario Kart 8 OST", "Mario Kart", 2017);
$ost3->addSong(new Song(1, "Rainbow Road", "Koji Kondo", 1, 400));
$ost3->addSong(new Song(2, "Kuh-Muh Weide", "Koji Kondo", 2, 100));
$ost3->addSong(new Song(3, "Toads Hafenstadt", "Koji Kondo", 3, 90));
$ost3->addSong(new Song(4, "Marios Piste", "Koji Kondo", 4, 200));
class Seeder{
    public static function getData():array{
        return array(
            new OST(1, "The Legend of Zelda: Ocarina of Time OST", "The Legend of Zelda: Ocarina of Time", 1998,
                array(addSong(new Song(1, "Rainbow Road", "Koji Kondo", 1, 400)))),
            new OST(2, "Final Fantasy VII OST", "Final Fantasy VII", 1997),
            new OST(3, "Mario Kart 8 OST", "Mario Kart", 2017)
        );
    }




}