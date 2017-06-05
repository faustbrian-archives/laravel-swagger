# Laravel Swagger

I would appreciate you taking the time to look at my [Patreon](https://www.patreon.com/faustbrian) and considering to support me if I'm saving you some time with my work.

Fork of [L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger) with support for Definitions based on Eloquent Models & kept up-to-date with the newest [Swagger UI](https://github.com/swagger-api/swagger-ui) release.

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-swagger
```

To get started, you'll need to publish the vendor assets:

```bash
php artisan vendor:publish --provider="BrianFaust\Swagger\SwaggerServiceProvider"
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
