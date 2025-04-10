<?php

declare(strict_types=1);

#[Component]
class ProductService
{
    public function getProduct()
    {
        return "Inject product dependency using attribute";
    }
}