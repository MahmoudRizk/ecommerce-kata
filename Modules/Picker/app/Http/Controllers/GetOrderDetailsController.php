<?php

namespace Modules\Picker\Http\Controllers;

use App\Http\Controllers\Controller;

class GetOrderDetailsController extends Controller
{
    public function __invoke()
    {
        return [
            [
                'id' => 'b1ef0dd7-0865-4dc5-943e-b244896f1bda',
                'status' => 'draft',
                'assigned_picker' => null,
                'items' => [
                    [
                        'product_id' => '8365e5c4-0d8d-4ea1-9f96-62a59beb532b',
                        'product_description' => 'chips',
                        'quantity' => 2,
                    ],
                    [
                        'product_id' => '3f2b9b41-a7c2-4457-b207-6adba261aa84',
                        'product_description' => 'Soda drink',
                        'quantity' => 2,
                    ],
                ]
            ]
        ];
    }
}