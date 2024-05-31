<?php

namespace Modules\Delivery\Http\Controllers;

use App\Http\Controllers\Controller;

class PickOrderForDeliveryController extends Controller
{
    public function __invoke($id)
    {
        return [
            'message' => 'order picked successfully.'
        ];
    }
}