<?php

declare(strict_types=1);

spl_autoload_register(function ($fileName) {
    $file = __DIR__ . "/{$fileName}.php";

    if (file_exists($file)):
        require_once $file;
    else:
        die("$file not found!!!");
    endif;
});


function testControllerFieldInjection(): void
{
    try {
        $classList = [UserService::class, ProductService::class, Controller::class];

        $container = new FieldInjectionContainer($classList);
        $controller = $container->get(Controller::class);
        $service = $controller->userService;
        echo $service->getUser() . "\n";

        $service = $controller->productService;
        echo $service->getProduct();

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

//testControllerFieldInjection();


function testTipReportFieldInjection(): void
{

    try {
        $classList = [
            TipCalculatorWithoutTax::class,
            TipCalculatorWithTax::class,
            TipReport::class
        ];

        $configValue = [
            "checkAmount" => 100,
            "tipPercent" => 20,
            "taxPercent" => 10
        ];
        $container = new ConfigurableFieldInjectionContainer(
            $classList, $configValue,
            [TipCalculator::class => TipCalculatorWithoutTax::class]
        );
        $report = $container->get(TipReport::class);
        $report->showReport();

        $tipCalculatorWithoutTax = $container->get(TipCalculatorWithoutTax::class);
        $result = $tipCalculatorWithoutTax->totalWithTip();
        echo "Result: $$result \n";

        $tipCalculatorWithTax = $container->get(TipCalculatorWithTax::class);
        $result = $tipCalculatorWithTax->totalWithTipAndTax();
        echo "Result: $$result \n";

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}

testTipReportFieldInjection();