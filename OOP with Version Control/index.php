<?php

//User Story 5
interface IVideo{
    function getName();
    function getSource();
    function getCode();
}

//User story 6
abstract class video implements IVideo{
    protected $name;
    protected $source;

    function __construct($name,$source){
        $this->name=$name;
        $this->source=$source;
    }

    function getName()
    {
        return '<p class="title">'.$this->name.'</p><p class="source">Youtube</p>';
    }
    function getSource()
    {
        return $this->source;
    }

    abstract public function getCode();
}

class YouVideo extends video {

    public function getCode()
    {
        return '<iframe width="308" height="173" src="https://www.youtube.com/embed/'. $this->source
            . '"frameborder="0" allowfullscreen></iframe>';
    }
}

class Vimeo extends video{

    public function getCode()
    {
        return '<iframe src="https://player.vimeo.com/video/' . $this->source
            . '" width="308" height="173" frameborder="0" allowfullscreen></iframe>';
    }
}