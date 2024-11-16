<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "<h3>This is a brand new lamborginni!</h3>";
    }
}
