<?php

declare(strict_types=1);

spl_autoload_register(function ($fileName) {
    $file = __DIR__ . "/$fileName.php";
    if (file_exists($file)):
        require_once $file;
    else:
        die("$file is not found!!!");
    endif;

});

function testMessageServiceInjection(): void
{
    try {
        $classList = [
            EmailService::class,
            SMSService::class,
            NotificationService::class
        ];

        $bindings = [
            MessageService::class => SMSService::class
        ];

        $constructorInjection = new ConstructorInjectionContainer($classList, $bindings);
        $service = $constructorInjection->get(NotificationService::class);

        $service->notify("Hello from PHP student");


    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

//testMessageServiceInjection();


function testTaxCalculatorInjection()
{
    try {

        $classList = [
            TaxCalculator2025::class,
            TaxCalculator2025::class,
            TaxReport::class
        ];

        $binding = [
            TaxCalculator::class => TaxCalculator2026::class
        ];

        $container = new ConstructorInjectionContainer($classList, $binding);
        $report = $container->get(TaxReport::class);
        $report->showReport(100, 0.2);

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}


testTaxCalculatorInjection();
