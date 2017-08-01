# Generate sitemaps with ease (spatie/laravel-sitemap FORK)

## Installation

First, install the package via composer:

``` bash
composer require mikicaivosevic/laravel-sitemap
```

Next up: installing the service provider

```php
// config/app.php
'providers' => [
    ...
    Mikica\Sitemap\SitemapServiceProvider::class,
];
```


### Manually creating a sitemap

You can also create a sitemap fully manual:

```php
use Carbon\Carbon;

Sitemap::create()
   ->add('/page1')
   ->add('/page2')
   ->add(Url::create('/page3')->setLastModificationDate(Carbon::create('2016', '1', '1')))
   ->add(Url::create('/page4')->addXhtmlLink([
       'hreflang' => 'de',
       'rel'      => 'alternate'
       'href'     => 'http://www.example.com/deutsch/'
   ]))
   ->writeToFile($sitemapPath);
```

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
