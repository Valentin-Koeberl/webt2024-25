<?php
include_once 'ost.php';
include_once 'song.php';

class Seeder{
    public static function getData():array{
        return array(
            new OST(1, "The Legend of Zelda: Ocarina of Time OST", "The Legend of Zelda: Ocarina of Time", 1998,
                array(
                    addSong(new Song(1, "Rainbow Road", "Koji Kondo", 1, 400)),
                    addSong(new Song(2, "Zelda's Lullaby", "Koji Kondo", 2, 90)),
                    addSong(new Song(3, "Link Disstrack", "Koji Kondo", 3, 50)),
                    addSong(new Song(4, "Zelda's Lullaby", "Koji Kondo", 4, 90))
                )),
            new OST(2, "Final Fantasy VII OST", "Final Fantasy VII", 1997,
                array(
                    addSong(new Song(1, "Opening - Bombing Mission", "Nobuo Uematsu", 1, 162)),
                    addSong(new Song(2, "Aerith's Theme", "Nobuo Uematsu", 2, 240)),
                    addSong(new Song(3, "Aerial Flip", "Nobuo Uematsu", 3, 60)),
                    addSong(new Song(4, "End Boss", "Nobuo Uematsu", 4, 140))
                )),
            new OST(3, "Mario Kart 8 OST", "Mario Kart", 2017,
                array(
                    addSong(new Song(1, "Rainbow Road", "Koji Kondo", 1, 400)),
                    addSong(new Song(2, "Kuh-Muh Weide", "Koji Kondo", 2, 100)),
                    addSong(new Song(3, "Toads Hafenstadt", "Koji Kondo", 3, 90)),
                    addSong(new Song(4, "Marios Piste", "Koji Kondo", 4, 200))
                ))
        );
    }
}