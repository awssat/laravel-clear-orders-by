> Archived since Laravel 7 now support `reorder` internally [see: reinink PR](https://github.com/laravel/framework/pull/32186)




#
#
#


# Laravel clear "orders" by
clear query builder orders 

## Usage

```php
->clearOrdersBy()
```

if you're using too many relations or using built in laravel realtions that using order by and you don't want them use :



```php

$model
->selectRaw('count(*) as MYORDER')
->where('name', 'Bader')
->clearOrdersBy()
->orderBy('MYORDER', 'desc')

```

```php

auth()->user()->notifications()
->selectRaw('count(*) as MYORDER')
->clearOrdersBy()
->orderBy('MYORDER', 'desc')

```


## Installation

`composer require if4lcon/laravel-clear-orders-by`

Then add this line `Bader\ClearOrdersBy\ClearOrdersByServiceProvider::class` to service providers in `config/app.php`.

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
