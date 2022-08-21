<?php

declare(strict_types=1);

use Beste\PhpCsFixer\Config;
use Ergebnis\PhpCsFixer\Config\Factory;

$config = Factory::fromRuleSet(new Config\RuleSet\Php81());

$config
    ->getFinder()
    ->in(__DIR__)
    ->ignoreDotFiles(false);

return $config;
