<?php

namespace Bader\ClearOrdersBy;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class ClearOrdersByServiceProvider extends ServiceProvider
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
}
