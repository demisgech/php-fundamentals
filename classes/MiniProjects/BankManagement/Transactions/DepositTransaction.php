<?php

declare(strict_types=1);


namespace BankManagement\Transactions;

use BankManagement\Accounts\BankAccount;
use BankManagement\Exceptions\NegativeAmountException;

use DateTime;

class DepositTransaction implements Transaction
{
    public function __construct(private BankAccount $account, private float $amount)
    {

    }

    function execute(): void
    {
        try {
            $this->account->deposit($this->amount);
            $this->account->addTransaction($this);

        } catch (NegativeAmountException $ex) {
            echo $ex->getMessage();
        }
    }

    function getDetails(): string
    {
        $dateTime = new DateTime("now");
        return "Deposit Transaction: on " . date("Y-m-d H:i:s", $dateTime->getTimestamp());
    }
}