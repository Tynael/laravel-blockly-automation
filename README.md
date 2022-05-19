# BlocklyAutomation package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/carolpelu/blockly-automation.svg?style=flat-square)](https://packagist.org/packages/carolpelu/blockly-automation)
[![Total Downloads](https://img.shields.io/packagist/dt/carolpelu/blockly-automation.svg?style=flat-square)](https://packagist.org/packages/carolpelu/blockly-automation)

Provides Laravel integration for the low-code BlocklyAutomation editor.

![BlocklyAutomation Screen](https://neutrondev.com/wp-content/uploads/2022/05/blockly-automation-carol-pelu-neutrondev-1.jpg)

## Technical Requirements

PHP ^7.4

## Installation

You can install the package via composer:

```bash
composer require carolpelu/blockly-automation
```

## Setup

### Laravel 6+

For projects using a Laravel version 6 or later, this package is being autoloaded and you can use it straight away.

### Laravel 5.8 or lower

For projects using a Laravel version 5.8 or lower, you have to manually load this package's service in order to use it.

To do that, go to your projects' `app.php` file and then add the `BlocklyAutomationServiceProvider::class` as a Provider:

```php
// app.php

<?php

use CarolPelu\BlocklyAutomation\ServiceProviders\BlocklyAutomationServiceProvider;

return [
    'providers' => [
        // other Providers
        BlocklyAutomationServiceProvider::class
    ]
]
```

## Usage

This package injects a `/BlocklyAutomation` web route into your application.

Just access `yoursite.com/BlocklyAutomation` to use this package.

☢️ WARNING ☢️

This route is a public route! Use it with caution!

### Testing

You can run the tests by using

```bash
composer test
```

or if you want to run a specific Test

```bash
composer test-if <method/Class>
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email carol@neutrondev.com instead of using the issue tracker.

## Credits

- [Carol-Theodor Pelu](https://github.com/tynael)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
