<?php

class Song {
    private $id;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration; // Duration in seconds

    public function __construct($id, $name, $artist, $trackNumber, $duration) {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'track_number' => $this->trackNumber,
            'duration' => $this->duration,
        ];
    }
}

class OST {
    private $id;
    private $name;
    private $videoGameName;
    private $releaseYear;
    private $trackList;

    public function __construct($id, $name, $videoGameName, $releaseYear) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = [];
    }

    public function addSong(Song $song) {
        $this->trackList[] = $song;
    }

    public function toArray() {
        $tracks = array_map(function($song) {
            return $song->toArray();
        }, $this->trackList);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'video_game_name' => $this->videoGameName,
            'release_year' => $this->releaseYear,
            'track_list' => $tracks,
        ];
    }
}

// Example Usage
$ost = new OST(1, "The Legend of Zelda: Ocarina of Time OST", "The Legend of Zelda: Ocarina of Time", 1998);
$ost->addSong(new Song(1, "Main Theme", "Koji Kondo", 1, 120));
$ost->addSong(new Song(2, "Zelda's Lullaby", "Koji Kondo", 2, 90));

// Output the OST in JSON format
header('Content-Type: application/json');
echo json_encode($ost->toArray());
?>
