<?php

class EmailService implements MessageService
{

    function sendMessage(string $message): void
    {
        echo "Sending... Mail: " . $message . "\n";
    }
}