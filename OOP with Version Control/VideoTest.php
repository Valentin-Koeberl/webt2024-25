<?php

use PHPUnit\Framework\TestCase;

require  'index.php';

class VideoTest extends TestCase
{
    public function testYouVideoGetName()
    {
        $video = new YouVideo("Test Video", "dQw4w9WgXcQ");
        $expected = '<p class="title">Test Video</p><p class="source">YouTube</p>';
        $this->assertEquals($expected, $video->getName());
    }

    public function testYouVideoGetSource()
    {
        $video = new YouVideo("Test Video", "dQw4w9WgXcQ");
        $this->assertEquals("dQw4w9WgXcQ", $video->getSource());
    }

    public function testYouVideoGetCode()
    {
        $video = new YouVideo("Test Video", "dQw4w9WgXcQ");
        $expected = '<iframe width="308" height="173" src="https://www.youtube.com/embed/dQw4w9WgXcQ"frameborder="0" allowfullscreen></iframe>';
        $this->assertEquals($expected, $video->getCode());
    }

    public function testVimeoGetName()
    {
        $video = new Vimeo("Test Vimeo Video", "123456789");
        $expected = '<p class="title">Test Vimeo Video</p><p class="source">Vimeo</p>';
        $this->assertEquals($expected, $video->getName());
    }

    public function testVimeoGetSource()
    {
        $video = new Vimeo("Test Vimeo Video", "123456789");
        $this->assertEquals("123456789", $video->getSource());
    }

    public function testVimeoGetCode()
    {
        $video = new Vimeo("Test Vimeo Video", "123456789");
        $expected = '<iframe src="https://player.vimeo.com/video/123456789" width="308" height="173" frameborder="0" allowfullscreen></iframe>';
        $this->assertEquals($expected, $video->getCode());
    }
}
