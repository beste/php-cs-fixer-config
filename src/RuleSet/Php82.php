<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer\Config\RuleSet;

use Beste\PhpCsFixer\Config\RuleSet;

final class Php82 implements RuleSet
{
    use CommonRules;

    public function name(): string
    {
        return 'BESTE (PHP 8.2)';
    }

    public function rules(): array
    {
        return array_merge($this->commonRules(), [
        ]);
    }

    public function targetPhpVersion(): int
    {
        return 80200;
    }
}
