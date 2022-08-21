<?php

declare(strict_types=1);

namespace Beste\PhpCsFixer\Config\RuleSet;

trait RuleOverrides
{
    protected function ruleOverrides(): array
    {
        return [
            'blank_line_between_import_groups' => true,
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => false,
                'import_functions' => true,
            ],
            'phpdoc_align' => [
                'align' => 'left',
            ],
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'none',
            ],
            'php_unit_test_class_requires_covers' => false,
            'yoda_style' => false,
        ];
    }
}
