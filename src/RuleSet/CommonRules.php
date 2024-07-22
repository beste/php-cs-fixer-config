<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer\Config\RuleSet;

trait CommonRules
{
    /**
     * @return array<string, array<string, mixed>|bool>
     */
    protected function commonRules(): array
    {
        return [
            '@PER-CS2.0' => true,
            'multiline_whitespace_before_semicolons' => [
                'strategy' => 'new_line_for_chained_calls',
            ],
            'no_unused_imports' => true,
            'ordered_imports' => [
                'case_sensitive' => true,
                'imports_order' => [
                    'const',
                    'class',
                    'function',
                ],
                'sort_algorithm' => 'alpha',
            ],
            'ordered_types' => [
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'none',
            ],
            'php_unit_internal_class' => [
                'types' => [
                    'abstract',
                    'final',
                    'normal',
                ],
            ],
            'trim_array_spaces' => true,
        ];
    }
}
