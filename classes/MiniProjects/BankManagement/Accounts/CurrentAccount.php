<?php

declare(strict_types=1);

namespace BankManagement\Accounts;

class CurrentAccount extends BankAccount
{

    public function __construct(string $accountNumber, float $balance)
    {
        parent::__construct($accountNumber, $balance);
    }


    public function withdraw(float $amount): void
    {
        // TODO: Implement withdraw() method.
    }

    public function deposit(float $amount): void
    {
        // TODO: Implement deposit() method.
    }

    public function getAccountType(): string
    {
        return "Current Account";
    }
}