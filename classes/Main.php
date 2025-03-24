<?php

require_once "TaxCalculator2025.php";
require_once "TaxCalculator2026.php";
require_once "TaxReport.php";

$taxCalculator2025 = new TaxCalculator2025(100);

$taxCalculator2026 = new TaxCalculator2026(300);
$taxReport = new TaxReport($taxCalculator2025);
$taxReport->showTaxReport();