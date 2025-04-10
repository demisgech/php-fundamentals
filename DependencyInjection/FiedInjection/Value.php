<?php

declare(strict_types=1);

#[Attribute(Attribute::TARGET_PROPERTY)]
class Value
{
    public function __construct(public string $key)
    {
    }
}