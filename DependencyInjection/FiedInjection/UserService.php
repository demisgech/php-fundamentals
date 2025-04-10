<?php

declare(strict_types=1);

#[Component]
class UserService
{
    public function getUser(): string
    {
        return "Demis, The PHP guru!";
    }
}