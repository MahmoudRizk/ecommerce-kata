<?php

namespace Modules\Shopper\Http\Controllers;

use App\Http\Controllers\Controller;

class GetOrderDetailsController extends Controller
{
    public function __invoke()
    {
        return [
            'id' => 'b1ef0dd7-0865-4dc5-943e-b244896f1bda',
            'items' => [
                [
                    'product_id' => '8365e5c4-0d8d-4ea1-9f96-62a59beb532b',
                    'description' => 'Chips',
                    'price' => 5.0,
                    'quantity' => 2,
                    'total' => 10.0,
                ],
                [
                    'product_id' => '3f2b9b41-a7c2-4457-b207-6adba261aa84',
                    'description' => 'Soda Drink',
                    'price' => 3.5,
                    'quantity' => 4,
                    'total' => 14.0,
                ]
            ],
            'total' => 24.0,
            'status' => 'draft',
        ];
    }
}
