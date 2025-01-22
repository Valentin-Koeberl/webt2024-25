<?php

//assertEquals, auf gleichen Wert prüfen, assertStringContainsString, ob ein String in einem anderen String enthalten ist, assertSame, ob zwei Variablen den gleichen Wert und den gleichen Typ haben
namespace tests;
use vimeo;
use YouVideo;

require_once 'index.php';

class SecondTests extends \PHPUnit\Framework\TestCase
{
    protected string $name = "TestVideo";
    protected string $source = "testvideo";
    protected string $srcvim = "https://player.vimeo.com/video/testvideo";

    public function testYoutubeGetName()
    {
        $youtube = new YouVideo($this->name, $this->source);
        $result = $youtube->getName();
        $this->assertEquals('<p class="title">TestVideo</p><p class="source">YouTube</p>', $result);
        $this->assertStringContainsString('YouTube', $result);
    }

    public function testYoutubeGetSource()
    {

        $youtube = new YouVideo($this->name, $this->source);

        $result = $youtube->getSource();
        $this->assertEquals($this->source, $result);
    }

    public function testYoutubeGetCode()
    {
        $youtube = new YouVideo($this->name, $this->source);
        $html = $youtube->getCode();
        $expectedHTML = '<iframe width="308" height="173" src="https://www.youtube.com/embed/testvideo"frameborder="0" allowfullscreen></iframe>';

        $this->assertEquals($expectedHTML, $html);
    }

    public function testVimeoGetName()
    {
        $vimeo = new Vimeo($this->name, $this->srcvim);
        $result = $vimeo->getName();
        $this->assertSame('<p class="title">TestVideo</p><p class="source">Vimeo</p>', $result);
    }

    public function testVimeoGetSource()
    {
        $vimeo = new vimeo($this->name, $this->srcvim);
        $result = $vimeo->getSource();
        $this->assertEquals('https://player.vimeo.com/video/testvideo', $result);
    }

    public function testVimeoGetCode()
    {
        $vimeo = new vimeo($this->name, $this->srcvim);
        $html = $vimeo->getCode();
        $expectedHTML = '<iframe src="https://player.vimeo.com/video/https://player.vimeo.com/video/testvideo" width="308" height="173" frameborder="0" allowfullscreen></iframe>';
        $this->assertEquals($expectedHTML, $html);
    }
}
