<?php
class Vimeo extends video{

    public function getCode()
    {
        return '<iframe src="https://player.vimeo.com/video/' . $this->source
            . '" width="308" height="173" frameborder="0" allowfullscreen></iframe>';
    }

    public function getName()
    {
        return parent::getName() . '<p class="source">Vimeo</p>';
    }
}