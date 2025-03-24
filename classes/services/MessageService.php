<?php

interface MessageService
{
    function sendMessage(string $message): void;
}