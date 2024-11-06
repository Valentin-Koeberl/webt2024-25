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
?>
