<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2023 Andreas Möller.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config-template
 */

namespace Beste\PhpCsFixer\Config;

use PhpCsFixer\Config;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

final class Factory
{
    /**
     * Creates a configuration based on a rule set.
     *
     * @param array<string, array<string, mixed>|bool> $overrideRules
     *
     * @throws \RuntimeException
     */
    public static function fromRuleSet(
        RuleSet $ruleSet,
        array $overrideRules = [],
    ): Config {
        if (\PHP_VERSION_ID < $ruleSet->targetPhpVersion()) {
            throw new \RuntimeException(sprintf(
                'Current PHP version "%s" is less than targeted PHP version "%s".',
                \PHP_VERSION_ID,
                $ruleSet->targetPhpVersion(),
            ));
        }

        $config = new Config($ruleSet->name());
        $config->setParallelConfig(ParallelConfigFactory::detect());
        $config->setRiskyAllowed(true);
        $config->setRules(array_merge(
            $ruleSet->rules(),
            $overrideRules,
        ));

        return $config;
    }
}
