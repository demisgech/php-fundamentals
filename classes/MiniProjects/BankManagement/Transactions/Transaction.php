<?php

declare(strict_types=1);


namespace BankManagement\Transactions;
interface Transaction
{
    function execute(): void;

    function getDetails(): string;
}