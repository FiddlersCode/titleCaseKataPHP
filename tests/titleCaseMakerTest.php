<?php

use PHPUnit\Framework\Testcase;
require "./src/titleCaseMaker.php";

class TitleCaseMakerTest extends TestCase
{
    protected function setUp()
    {
        $this->titleCaseMaker = new TitleCaseMaker();
    }
    public function testAllLowercaseString()
    {
        $string = "cold comfort farm";
        $this->assertEquals("Cold Comfort Farm", $this->titleCaseMaker->makeTitleCase($string));
    }

    public function testMixedCasetring()
    {
        $string = "THE MAN who MIStook hIS Wife for A HaT";
        $this->assertEquals("The Man Who Mistook His Wife For A Hat", $this->titleCaseMaker->makeTitleCase($string));
    }
}
