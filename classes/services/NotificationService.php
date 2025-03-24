<?php

class NotificationService
{

    public function __construct(private MessageService $service)
    {

    }

    public function send(string $message): void
    {
        $this->service->sendMessage($message);
    }

    public function __destruct()
    {
        echo "Distructor called";

    }
}