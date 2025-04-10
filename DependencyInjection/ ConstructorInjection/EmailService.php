<?php

declare(strict_types=1);

#[Component]
class EmailService implements MessageService
{
    public function send(string $message)
    {
        echo "Message sent by Email: " . $message . "\n";
    }
}