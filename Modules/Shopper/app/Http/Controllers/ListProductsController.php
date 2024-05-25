<?php

namespace Modules\Shopper\Http\Controllers;

use App\Http\Controllers\Controller;


class ListProductsController extends Controller
{
    public function __invoke()
    {
        return [
            (object) [
                'id' => '8365e5c4-0d8d-4ea1-9f96-62a59beb532b',
                'description' => 'Chips',
                'price' => 5.0,
            ],
            (object) [
                'id' => '3f2b9b41-a7c2-4457-b207-6adba261aa84',
                'description' => 'Soda Drink',
                'price' => 3.5,
            ],
            (object) [
                'id' => '26901842-ed2c-4c56-b4a4-e323c08ec9ba',
                'description' => 'Chocolate',
                'price' => 2.0,
            ]

        ];
    }
}