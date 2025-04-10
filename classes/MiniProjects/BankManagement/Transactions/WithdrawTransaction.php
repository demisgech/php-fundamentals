<?php

declare(strict_types=1);


namespace BankManagement\Transactions;

use BankManagement\Accounts\BankAccount;

use DateTime;
use Exception;

class WithdrawTransaction implements Transaction
{

    public function __construct(private BankAccount $account, private float $amount)
    {

    }

    function execute(): void
    {
        try {
            $this->account->withdraw($this->amount);
            $this->account->addTransaction($this);

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    function getDetails(): string
    {
        $dateTime = new DateTime("now");
        return ("Withdrew Transaction: on " .
            date("Y-m-d H:i:s", $dateTime->getTimestamp())
        );
    }
}