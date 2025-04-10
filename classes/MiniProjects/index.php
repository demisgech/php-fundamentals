<?php

declare(strict_types=1);

use BankManagement\Accounts\SavingAccount;

//class auto loading
//spl_autoload_register(function ($class) {
//    $dirctories = [
//        __DIR__ . "/accounts/",
//        __DIR__ . "/transactions/",
//        __DIR__ . "/exceptions/",
//    ];
//
//    foreach ($dirctories as $directory) {
//        $file = $directory . $class . ".php";
//        if (file_exists($file)) {
//            require_once $file;
////            return;
//        }
//    }
//});

// Namespace autoloading


spl_autoload_register(function ($class) {
    $baseDirectory = __DIR__ . "/";
    $file = $baseDirectory . str_replace("\\", "/", $class . ".php");
    if (file_exists($file)) {
        require_once $file;
    } else {
        echo $file . " is not found";
    }
});

$accountOne = new SavingAccount("123", 100);


$accountOne->deposit(1000);

$accountOne->withdraw(500);


$accountOne->printStatement();

$balance = $accountOne->getBalance();

echo "Balance: $balance \n";