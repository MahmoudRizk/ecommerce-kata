<?php

namespace Modules\Shopper\Http\Controllers;

use App\Http\Controllers\Controller;

class InsertOrderController extends Controller
{
    public function __invoke($id)
    {
        return [
            'message' => 'Order inserted successfully.'
        ];
    }
}