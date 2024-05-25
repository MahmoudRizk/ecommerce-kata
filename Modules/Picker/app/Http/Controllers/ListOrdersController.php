<?php

namespace Modules\Picker\Http\Controllers;

use App\Http\Controllers\Controller;

class ListOrdersController extends Controller
{
    public function __invoke()
    {
        return [
            [
                'id' => 'b1ef0dd7-0865-4dc5-943e-b244896f1bda',
                'status' => 'draft',
                'assigned_picker' => null,
            ],
            [
                'id' => '324c007c-a1c1-4f8b-b318-4085cef3e3f3',
                'status' => 'draft',
                'assigned_picker' => null,
            ],
            [
                'id' => '2f14fa6d-3af6-4db2-b117-ebf3b51bacf0',
                'status' => 'draft',
                'assigned_picker' => null,
            ],
        ];
    }
}