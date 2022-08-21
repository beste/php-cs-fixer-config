<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer;

final class Placeholder
{
    private string $prefix;

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function echo(string $value): string
    {
        return $this->prefix . $value;
    }
}
