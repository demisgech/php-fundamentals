<?php

declare(strict_types=1);

namespace BankManagement\Accounts;

use BankManagement\Transactions\Transaction;

abstract class BankAccount
{
    protected string $accountNumber;
    protected float $balance;
    protected array $transactions = [];

    public function __construct(string $accountNumber, float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalace(float $amount): void
    {
        if($mamount <= 0)
            throw new IllegalArgumentException("Amount must be positive!!");
        $this->balance = $amount;
    }

    public abstract function withdraw(float $amount): void;

    public abstract function deposit(float $amount): void;

    public abstract function getAccountType(): string;

    public function printStatement(): void
    {
        foreach ($this->transactions as $transaction) {
            echo $transaction->getDetails() . "\n";
        }
    }

    public function addTransaction(Transaction $transaction): void
    {
        $this->transactions[] = $transaction;
    }
}