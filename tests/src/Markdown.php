<?php


namespace app;

class Markdown
{
    public function html($plainText)
    {
        return '<p>'.$plainText.'</p>';
    }
}
