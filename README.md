# PhpMob Settings
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phpmob/settings/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/phpmob/settings/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/phpmob/settings/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/phpmob/settings/?branch=master)
[![Build Status](https://travis-ci.org/phpmob/settings.svg?branch=master)](https://travis-ci.org/phpmob/settings)
[![Latest Stable Version](https://poser.pugx.org/phpmob/settings/version)](https://packagist.org/packages/phpmob/settings)
[![Latest Unstable Version](https://poser.pugx.org/phpmob/settings/v/unstable)](//packagist.org/packages/phpmob/settings)

Just a Settings Library.

## Installation
Install via composer.

```bash
$ composer require phpmob/settings
```

Using with cache

```bash
$ composer require cache/filesystem-adapter
```

Now you can use built-in `\PhpMob\Settings\Manager\CachedManager`.

## Symfony3 Integration
See [PhpMob/SettingsBundle](https://github.com/phpmob/settings-bundle)

## Contributing
Would like to help us and build the developer-friendly php code? Just follow our [Coding Standards](#coding-standards) and test your code — see [tests](tests),  [spec](spec).

Let Fork and PR now!

## Coding Standards

When contributing code to PhpMob, you must follow its coding standards.

PhpMob follows the standards defined in the [PSR-0](http://www.php-fig.org/psr/psr-0/), [PSR-1](http://www.php-fig.org/psr/psr-1/) and [PSR-2](http://www.php-fig.org/psr/psr-2/) documents.

```bash
$ ./bin/ecs check Manager Model Provider Schema Type --fix
```
## Tests
```bash
$ ./bin/phpunit
```

## LICENSE
[MIT](LICENSE)
