<?php

declare(strict_types=1);

#[Attribute(Attribute::TARGET_PARAMETER)]
class Value
{
    public function __construct(public ?array $params)
    {
    }
}