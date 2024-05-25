<?php

namespace Modules\Shopper\Http\Controllers;

use App\Http\Controllers\Controller;

class CustomerSignupController extends Controller
{
    public function __invoke()
    {
        return [
            'message' => 'Singed up successfully.'
        ];
    }
}