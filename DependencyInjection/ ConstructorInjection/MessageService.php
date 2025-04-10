<?php

declare(strict_types=1);

interface MessageService
{
    public function send(string $message);
}