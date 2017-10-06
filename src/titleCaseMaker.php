<?php

class TitleCaseMaker {

    public function makeTitleCase($title, $exceptions='')
    {
        $titleAllUpper = ucwords(strtolower($title));
        return str_replace(ucfirst($exceptions), lcfirst($exceptions), $titleAllUpper);
    }
}