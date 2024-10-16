<?php
class YouVideo extends video {

    public function getCode()
    {
        return '<iframe width="308" height="173" src="https://www.youtube.com/embed/'. $this->source
            . '"frameborder="0" allowfullscreen></iframe>';
    }

    public function getName()
    {
        return parent::getName() . '<p class="source">YouTube</p>';
    }
}