# Create view by commande artisan in Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/katana9108/createview-package.svg?style=flat-square)](https://packagist.org/packages/katana9108/createview-package)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/katana9108/createview-package/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/katana9108/createview-package/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/katana9108/createview-package/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/katana9108/createview-package/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/katana9108/createview-package.svg?style=flat-square)](https://packagist.org/packages/katana9108/createview-package)

A small laravel package allowing to create views from the terminal. Requires a version of php 8 and Laravel 9.
## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/CreateView-package.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/CreateView-package)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require katana9108/createview-package
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="createview-package-config"
```

This is the contents of the published config file:

```php
return [
    'test'=>[
        'disabled'=>true,
    ]
];
```
## Usage

```
To create a view run : php artisan k:v {viewname}                   
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [JeyCodeur](https://github.com/katana9108)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
