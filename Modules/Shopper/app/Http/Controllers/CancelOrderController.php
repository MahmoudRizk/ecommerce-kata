<?php

namespace Modules\Shopper\Http\Controllers;

use App\Http\Controllers\Controller;

class CancelOrderController extends Controller
{
    public function __invoke()
    {
        return [
            'message' => 'Order cancelled successfully.'
        ];
    }
}