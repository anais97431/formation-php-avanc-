<?php

namespace app;

interface NewsletterInterface
{
   public function setRecipients(array $recipients);
   public function send(string $subject, string $body);
    
}

