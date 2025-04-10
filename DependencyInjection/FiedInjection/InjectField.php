<?php

declare(strict_types=1);

/**
 * dependency injection (DI) is a design pattern where an object receives
 * its dependencies from an external source rather than creating them itself.
 *  With the advent of PHP 8,attributes (or annotations) provide a structured
 *  and clean way to implement DI.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class InjectField
{

}