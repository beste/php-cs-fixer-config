<?php

declare(strict_types=1);

use Beste\PhpCsFixer\Config\Factory;
use Beste\PhpCsFixer\Config\RuleSet\Php81;

$config = Factory::fromRuleSet(new Php81());

$config
    ->getFinder()
    ->in(__DIR__)
    ->ignoreDotFiles(false)
;

return $config;
