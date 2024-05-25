<?php

namespace Modules\Shopper\Http\Controllers;

use App\Http\Controllers\Controller;

class GetOrdersController extends Controller
{
    public function __invoke()
    {
        return [
            [
                'id' => 'b1ef0dd7-0865-4dc5-943e-b244896f1bda',
                'total' => 24.0,
                'status' => 'draft',
            ],
            [
                'id' => '324c007c-a1c1-4f8b-b318-4085cef3e3f3',
                'total' => 14.0,
                'status' => 'confirmed',
            ],
            [
                'id' => '2f14fa6d-3af6-4db2-b117-ebf3b51bacf0',
                'total' => 100.0,
                'status' => 'cancelled',
            ]
        ];
    }
}