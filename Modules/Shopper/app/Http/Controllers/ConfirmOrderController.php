<?php

namespace Modules\Shopper\Http\Controllers;

use App\Http\Controllers\Controller;

class ConfirmOrderController extends Controller
{
    public function __invoke()
    {
        return [
            'message' => 'Order confirmed successfully.'
        ];
    }
}