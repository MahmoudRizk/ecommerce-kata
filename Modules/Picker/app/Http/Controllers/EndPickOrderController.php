<?php

namespace Modules\Picker\Http\Controllers;

use App\Http\Controllers\Controller;

class EndPickOrderController extends Controller
{
    public function __invoke()
    {
        return [
            'message' => 'order picking is done successfully.'
        ];
    }
}