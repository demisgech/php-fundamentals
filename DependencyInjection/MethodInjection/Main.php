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

/**
 * @return void
 * @throws Exception
 */
function testMethodInjectionWithConfigurableValue(): void
{
    try {

        $classList = [
            FixedAmountDiscountCalculator::class,
            DiscountReport::class
        ];

        $interfaceBindings = [
            DiscountCalculator::class => FixedAmountDiscountCalculator::class
        ];

        $constructorParams = [
            FixedAmountDiscountCalculator::class => [200] // Inject fixed discount amount
        ];
        $container = new MethodInjectionContainer(
            $classList, $interfaceBindings, $constructorParams
        );
        $report = $container->get(DiscountReport::class);
        $report->showReport(900, 20);

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

/**
 * @return void
 */
function testMethodInjectionWithoutConfigurableValue(): void
{
    try {
        // Bind interface to concrete implementation
//    $interfaceBindings = [
//        DiscountCalculator::class => OrderPaymentDiscountCalculator::class
//    ];

        $interfaceBindings = [
            DiscountCalculator::class => PercentageDiscountCalculator::class
        ];

// List of classes to be processed
        $classList = [
            OrderPaymentDiscountCalculator::class,
            PercentageDiscountCalculator::class,
            DiscountReport::class
        ];

// Instantiate the container
        $container = new MethodInjectionContainer($classList, $interfaceBindings);

// Get the DiscountReport instance and use it
        $report = $container->get(DiscountReport::class);
        $report->showReport(200, 10);


    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

//testMethodInjectionWithoutConfigurableValue();

testMethodInjectionWithConfigurableValue();