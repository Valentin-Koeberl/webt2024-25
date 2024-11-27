<?php

require_once 'song.php';

class OST implements JsonSerializable{
    private $id;
    private $name;
    private $videoGameName;
    private $releaseYear;
    private $trackList;
    private array $songs;


    public function __construct($id, $name, $videoGameName, $releaseYear, array $trackList) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    public function addSong(Song $song) {
        $this->trackList[] = $song;
    }



    public function jsonSerialize(): mixed
    {
        return [
        'id' => $this->id,
            'name' => $this->name,
            'video_game_name' => $this->videoGameName,
            'release_year' => $this->releaseYear,
            'track_list' => $this->trackList
        ];
    }
}
?>
