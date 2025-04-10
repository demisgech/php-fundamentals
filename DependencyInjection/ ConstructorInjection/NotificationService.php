<?php

declare(strict_types=1);

#[Component]
class NotificationService
{
    private MessageService $service;

    #[InjectConstructor]
    public function __construct(MessageService $service)
    {
        $this->service = $service;
    }

    public function notify(string $message)
    {
        $this->service->send($message);

    }
}