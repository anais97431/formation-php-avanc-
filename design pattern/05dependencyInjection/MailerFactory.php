<?php

namespace app;


class MailerFactory
{

    public function create(string $smtp): MailerInterface
    {
        echo 'smtp: '.$smtp."\n";
        return new Mailer();
    }
}