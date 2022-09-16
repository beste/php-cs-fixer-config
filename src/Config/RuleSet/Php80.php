<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer\Config\RuleSet;

use Ergebnis\PhpCsFixer\Config\RuleSet;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php80 as ErgebnisPhp80;

use function array_merge;

final class Php80 implements RuleSet
{
    use RuleOverrides;
    private ErgebnisPhp80 $base;

    public function __construct(?string $header = null)
    {
        $this->base = new ErgebnisPhp80($header);
    }

    public function name(): string
    {
        return 'BESTE (PHP 8.0)';
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
