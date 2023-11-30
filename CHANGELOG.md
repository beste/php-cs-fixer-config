# CHANGELOG

## [Unreleased]

## [2.4.1] - 2023-11-30

* Allow use of newer PHP CS Fixer versions

## [2.4.0] - 2023-11-30

* Add support for PHP 8.3

## [2.3.0] - 2023-09-07

* Replace deprecated `function_typehint_space` with `type_declaration_spaces`
* Replace deprecated `no_spaces_inside_parenthesis` with `spaces_inside_parentheses`

## [2.2.0] - 2023-06-20

* Replaced deprecated `no_blank_lines_before_namespace` and `single_blank_line_before_namespace` rules with
  `blank_lines_before_namespace`

## [2.1.0] - 2023-05-18

* Changed `php_unit_test_annotation` style from `prefix` to `annotation`

## [2.0.0] - 2023-04-09

* Removed `friendsofphp/php-cs-fixer` as a direct dependency 
  ([the recommended way is not to use it as a dev dependency](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer#installation))
* Removed configs for PHP 7.4 and 8.0
* Changed directory structure to align with [`ergebnis/php-cs-fixer-config-template`](https://github.com/ergebnis/php-cs-fixer-config-template)
* Made all common rules explicit

## [1.2.0] - 2022-10-18

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

[Unreleased]: https://github.com/beste/php-cs-fixer-config/compare/2.4.1...main
[2.4.1]: https://github.com/beste/php-cs-fixer-config/compare/2.4.0...2.4.1
[2.4.0]: https://github.com/beste/php-cs-fixer-config/compare/2.3.0...2.4.0
[2.3.0]: https://github.com/beste/php-cs-fixer-config/compare/2.2.0...2.3.0
[2.2.0]: https://github.com/beste/php-cs-fixer-config/compare/2.1.0...2.2.0
[2.1.0]: https://github.com/beste/php-cs-fixer-config/compare/2.0.0...2.1.0
[2.0.0]: https://github.com/beste/php-cs-fixer-config/compare/1.2.0...2.0.0
[1.2.0]: https://github.com/beste/php-cs-fixer-config/compare/1.1.0...1.2.0
[1.1.0]: https://github.com/beste/php-cs-fixer-config/compare/1.0.2...1.1.0
[1.0.2]: https://github.com/beste/php-cs-fixer-config/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/beste/php-cs-fixer-config/compare/1.0.0...1.0.1
[1.0.0]: https://github.com/beste/php-cs-fixer-config/tree/1.0.0
