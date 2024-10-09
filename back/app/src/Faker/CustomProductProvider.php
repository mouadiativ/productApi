<?php

namespace App\Faker;

use Faker\Provider\Base;

class CustomProductProvider extends Base
{
    public static function shellId()
    {
        return static::randomElement(range(1, 10)); // Shell ID between 1 and 10
    }

    public static function inventoryStatus()
    {
        return static::randomElement(['in_stock', 'out_of_stock']);
    }
}
