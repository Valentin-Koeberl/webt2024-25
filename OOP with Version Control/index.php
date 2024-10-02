<?php

//User Story 5
interface IVideo{
    function getName();
    function getSource();
    function getCode();
}

//User story 6
abstract class video implements IVideo{
    private $name;
    private $source;
    private $code;

    function getName()
    {
        return $this->name;
    }
    function getSource()
    {
        return $this->source;
    }
    function getCode()
    {
        return $this->code;
    }
}

class YouVideo extends video {

}