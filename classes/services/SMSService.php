<?php

class SMSService implements MessageService
{

    function sendMessage(string $message): void
    {
        echo "Sending... SMS: " . $message . "\n";
    }
}