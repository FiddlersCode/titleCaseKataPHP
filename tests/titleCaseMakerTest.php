<?php

use PHPUnit\Framework\Testcase;
require "./src/titleCaseMaker.php";

class TitleCaseMakerTest extends TestCase
{
    public function testAllLowercaseString()
    {
        $string = "cold comfort farm";
        $titleCaseMaker = new TitleCaseMaker();
        $this->assertEquals("Cold Comfort Farm", $titleCaseMaker->makeTitleCase($string));
    }
}
