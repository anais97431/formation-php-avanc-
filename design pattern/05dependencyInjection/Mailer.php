<?php

namespace app;


class Mailer implements MailerInterface
{
    public function send(string $to, string $subject, string $body)
    {
            echo 'a mail about '.$subject.' has been sent to '.$to."\n";
    }
}