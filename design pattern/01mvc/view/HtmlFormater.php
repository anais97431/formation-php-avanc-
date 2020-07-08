<?php

namespace app\view;


class HtmlFormater{

    public function format(string $text) : string{
        return '<p>'.$text.'</p>';
    }
}