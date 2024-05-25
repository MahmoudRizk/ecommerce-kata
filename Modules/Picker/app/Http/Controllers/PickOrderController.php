<?php

namespace Modules\Picker\Http\Controllers;

use App\Http\Controllers\Controller;

class PickOrderController extends Controller
{
    public function __invoke($id)
    {
        return [
            'message' => 'order picked successfully, you can start picking it.'
        ];
    }
}