<?php

class TitleCaseMaker {

    public function makeTitleCase($string)
    {
        return ucwords(strtolower($string));
    }
}