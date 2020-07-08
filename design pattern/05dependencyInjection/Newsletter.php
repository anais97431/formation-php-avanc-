<?php

namespace app;


class Newsletter implements NewsletterInterface
{
    private $mailer;
    private $recipients = [];

    public function __construct(Mailer $mailer)
    {
        
        $this->mailer = $mailer;
    }

    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;
    }

    public function send(string $subject, string $body)
    {
        foreach($this->recipients as $recipients){
            $this->mailer->send($recipients, $subject, $body);
        }
    }
}