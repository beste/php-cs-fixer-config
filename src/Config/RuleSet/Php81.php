<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer\Config\RuleSet;

use Ergebnis\PhpCsFixer\Config\RuleSet;
use Ergebnis\PhpCsFixer\Config\RuleSet\Php81 as ErgebnisPhp81;

use function array_merge;

final class Php81 implements RuleSet
{
    use RuleOverrides;
    private ErgebnisPhp81 $base;

    public function __construct(private readonly ?string $header = null)
    {
        $this->base = new ErgebnisPhp81($this->header);
    }

    public function name(): string
    {
        return 'BESTE (PHP 8.1)';
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
