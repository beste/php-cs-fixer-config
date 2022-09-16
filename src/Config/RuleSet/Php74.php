<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer\Config\RuleSet;

use Ergebnis\PhpCsFixer\Config\RuleSet;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php74 as ErgebnisPhp74;

use function array_merge;

final class Php74 implements RuleSet
{
    use RuleOverrides;
    private ErgebnisPhp74 $base;

    public function __construct(?string $header = null)
    {
        $this->base = new ErgebnisPhp74($header);
    }

    public function name(): string
    {
        return 'BESTE (PHP 7.4)';
    }

    public function targetPhpVersion(): int
    {
        return $this->base->targetPhpVersion();
    }

    public function rules(): array
    {
        return array_merge($this->base->rules(), $this->ruleOverrides());
    }
}
