<?php

class TitleCaseMaker {

    public function makeTitleCase($title, $exceptions='')
    {
        $titleUC = ucwords(strtolower($title));
        $exceptions = explode(" ", $exceptions);

        foreach ($exceptions as $exception) {
            $titleUC = (str_replace(ucwords($exception), $exception, $titleUC));
        }
        return ucfirst($titleUC);
    }
}