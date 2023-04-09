<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2023 Andreas Möller.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config-template
 */

namespace Beste\PhpCsFixer\Config;

interface RuleSet
{
    public function name(): string;

    /**
     * @return array<string, array<string, mixed>|bool>
     */
    public function rules(): array;

    /**
     * Returns the minimum required PHP version (PHP_VERSION_ID).
     *
     * @see http://php.net/manual/en/reserved.constants.php
     */
    public function targetPhpVersion(): int;
}
