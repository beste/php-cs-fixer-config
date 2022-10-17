# CHANGELOG

## [Unreleased]

* `global_namespace_import`: Imports or fully qualifies global classes/functions/constants.
  * Re-enable for classes, constants, and functions

## [1.1.0] - 2022-09-18

* `native_function_invocation`: Add leading `\` before function invocation to speed up resolving
  * Enable only for `@compiler_optimized` functions and remove `\` of function calls not meant to have it.
* `global_namespace_import`: Imports or fully qualifies global classes/functions/constants.
  * Enable only for classes

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

[Unreleased]: https://github.com/beste/php-cs-fixer-config/compare/1.1.0...main
[1.1.0]: https://github.com/beste/php-cs-fixer-config/compare/1.0.2...1.1.0
[1.0.2]: https://github.com/beste/php-cs-fixer-config/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/beste/php-cs-fixer-config/compare/1.0.0...1.0.1
[1.0.0]: https://github.com/beste/php-cs-fixer-config/tree/1.0.0
