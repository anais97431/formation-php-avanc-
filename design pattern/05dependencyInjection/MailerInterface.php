<?php

namespace app;

interface MailerInterface
{
    public function send(string $to, string $subject, string $body);
}