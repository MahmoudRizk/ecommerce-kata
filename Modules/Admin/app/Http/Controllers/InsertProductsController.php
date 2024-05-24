<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class InsertProductsController extends Controller
{
    public function __invoke(string $id)
    {
        return [
            "message" => 'item inserted successfully'
        ];
    }
}