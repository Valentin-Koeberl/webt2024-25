<?php

require_once 'song.php';

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
?>
