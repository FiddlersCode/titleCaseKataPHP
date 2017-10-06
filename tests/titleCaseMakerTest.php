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
        $title = "cold comfort farm";
        $this->assertEquals("Cold Comfort Farm", $this->titleCaseMaker->makeTitleCase($title));
    }

    public function testMixedCasetring()
    {
        $title = "THE MAN who MIStook hIS Wife for A HaT";
        $this->assertEquals("The Man Who Mistook His Wife For A Hat", $this->titleCaseMaker->makeTitleCase($title));
    }

    public function testAllUppercaseString()
    {
        $title = "MADAME BOVARY";
        $this->assertEquals("Madame Bovary", $this->titleCaseMaker->makeTitleCase($title));
    }

    public function testOneExceptedWord()
    {
        $title = "war and peace";
        $exceptions = "and";
        $this->assertEquals("War and Peace", $this->titleCaseMaker->makeTitleCase($title, $exceptions));
    }

    public function testMultipleExceptedWords()
    {
        $title = "the lord of the rings";
        $exceptions = "the of";
        $this->assertEquals("The Lord of the Rings", $this->titleCaseMaker->makeTitleCase($title, $exceptions));
    }

    public function testExceptedWordIsFirst()
    {
        $title = "the quick brown fox";
        $this->assertEquals("The Quick Brown Fox", $this->titleCaseMaker->makeTitleCase($title));
    }
}
