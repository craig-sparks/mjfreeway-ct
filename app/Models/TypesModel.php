<?php

namespace App\Models;

class TypesModel {
    public static $TYPES = [
        'MonsterUltraSunrise' => [
            'name' => 'Monster Ultra Sunrise',
            'serving_size' => 2,
            'per_serving_caffeine' => '75'
        ],
        'BlackCoffee' => [
            'name' => 'Black Coffee',
            'serving_size' => 1,
            'per_serving_caffeine' => '95'
        ],
        'Americano' => [
            'name' => 'Americano',
            'serving_size' => 1,
            'per_serving_caffeine' => '77'
        ],
        'SugerFreeNOS' => [
            'name' => 'Suger Free NOS',
            'serving_size' => 2,
            'per_serving_caffeine' => '130'
        ],
        '5HourEnergy' => [
            'name' => '5 Hour Energy',
            'serving_size' => 1,
            'per_serving_caffeine' => '200'
        ],
    ];

    public function getTypes() {
        return self::$TYPES;
    }
}