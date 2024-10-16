<?php

abstract class video implements IVideo{
    protected $name;
    protected $source;

    function __construct($name,$source){
        $this->name=$name;
        $this->source=$source;
    }

    function getName()
    {
        return '<p class="title">'.$this->name.'</p>';
    }
    function getSource()
    {
        return $this->source;
    }

    abstract public function getCode();
}