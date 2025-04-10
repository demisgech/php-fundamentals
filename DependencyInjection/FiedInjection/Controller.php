<?php

declare(strict_types=1);

#[Component]
class Controller
{
    #[InjectField]
    public UserService $userService;

    #[InjectField]
    public ProductService $productService;

}