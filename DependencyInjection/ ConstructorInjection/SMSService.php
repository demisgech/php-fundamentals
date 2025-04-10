<?php

declare(strict_types=1);

#[Component]
class SMSService implements MessageService
{

    public function send(string $message)
    {
        echo "Message sent by SMS: " . $message . "\n";
    }
}