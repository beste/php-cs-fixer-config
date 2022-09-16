# CHANGELOG

## [Unreleased]

## [1.0.2] - 2022-09-16

* Fixes rule sets to be compatible with PHP 7.4

## [1.0.1] - 2022-08-25

* Fixes PHP version requirements to allow PHP 7.4 and PHP 8.0

## [1.0.0] - 2022-08-25

* Rules extend the Ergebnis rules with the following modifications:
  * `blank_line_between_import_groups`: Blank lines are put between import groups 
  * `global_namespace_import`: classes and functions are imported
  * `phpdoc_align`: PHPDoc items are left-aligned
  * `phpdoc_types_order`: types are not sorted, `null` is always last
  * `php_unit_test_class_requires_covers`: Tests don't require `@covers` annotations
  * `yoda_style`: Condition styles are not enforced

[Unreleased]: https://github.com/beste/php-cs-fixer-config/compare/1.0.2...main
[1.0.2]: https://github.com/beste/php-cs-fixer-config/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/beste/php-cs-fixer-config/compare/1.0.0...1.0.1
[1.0.0]: https://github.com/beste/php-cs-fixer-config/tree/1.0.0
