<?php

declare(strict_types=1);

namespace BankManagement\Accounts;

use BankManagement\Transactions\DepositTransaction;
use BankManagement\Transactions\WithdrawTransaction;

use BankManagement\Exceptions\InsufficientAmountException;
use BankManagement\Exceptions\NegativeAmountException;

class SavingAccount extends BankAccount
{

    public function __construct(string $accountNumber, float $balance)
    {
        parent::__construct($accountNumber, $balance);
    }

    /**
     * @throws NegativeAmountException
     * @throws InsufficientAmountException
     */
    public function withdraw(float $amount): void
    {
        if ($amount <= 0)
            throw new NegativeAmountException("Amount cannot be negative");
        if ($amount >= $this->balance)
            throw new InsufficientAmountException("Insufficient amount!");
        $this->balance -= $amount;
        $this->addTransaction(new WithdrawTransaction($this, $amount));
    }

    /**
     * @throws NegativeAmountException
     */
    public function deposit(float $amount): void
    {
        if ($amount <= 0)
            throw new NegativeAmountException("Amount cannot be negative");
        $this->balance += $amount;
        $this->addTransaction(new DepositTransaction($this, $amount));
    }

    public function getAccountType(): string
    {
        return "Saving Account";
    }
}