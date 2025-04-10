<?php

declare(strict_types=1);

namespace BankManagement\Transactions;

use BankManagements\Accounts\BankAccount;
use Exception;
use DateTime;

class TransferTransaction implements Transaction
{

    public function __construct(
        private BankAccount $sourceAccount,
        private BankAccount $destinationAccount,
        private float       $amount)
    {

    }

    function execute(): void
    {
        try {
            $this->sourceAccount->withdraw($this->amount);
            $this->sourceAccount->addTransaction($this);

            $this->destinationAccount->deposit($this->amount);
            $this->destinationAccount->addTransaction($this);

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

    }

    function getDetails(): string
    {
        $dateTime = new DateTime("now");
        return ("Transfer Transaction: on " .
            date("Y-m-d H:i:s", $dateTime->getTimestamp()) .
            " from " . $this->sourceAccount->getAccountType() .
            " to " . $this->destinationAccount->getAccountType()
        );
    }
}