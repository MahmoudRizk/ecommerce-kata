<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListProductsController extends Controller
{

    public function __invoke()
    {
        return [
            'a' => 1,
            'b' => 2,
        ];
    }
}
