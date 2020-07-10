<?php


namespace app;

class Response
{
    private $data;
    private $status;
    public function __construct($data, $status=200)
    {
        $this->data = $data;
        $this->status = $status;
    }

    public function send()
    {
        http_response_code($this->status);
        // entête http Content type pour dire que c'est du json
        header('Content-type: text/json');

        echo \json_encode($this->data);
    }
}