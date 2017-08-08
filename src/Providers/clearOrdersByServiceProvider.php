<?php

namespace Bader\ClearOrdersBy\Providers;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class clearOrdersByServiceProvider extends ServiceProvider
{
    /**
     * Add a ->clearOrdersBy() to query builder
     */
    public function register()
    {
        Builder::macro("clearOrdersBy", function () {
            $this->{$this->unions ? 'unionOrders' : 'orders'} = null;

            return $this;
        });
    }
