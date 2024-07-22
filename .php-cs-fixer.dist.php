<?php

declare(strict_types=1);

use Beste\PhpCsFixer\Config\Factory;
use Beste\PhpCsFixer\Config\RuleSet\Php83;

$config = Factory::fromRuleSet(new Php83());

$config
    ->getFinder()
    ->in(__DIR__)
    ->ignoreDotFiles(false)
;

return $config;
