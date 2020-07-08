<?php

namespace app;


class NewsletterFactory
{

    public function create(MailerInterface $mailer): NewsletterInterface
    {
       
        return new Newsletter($mailer);
    }
}