<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HelloController extends Controller
{
    public function welcome()
    {
        return View::first(
            ['welcome','hello.welcome'])->with(
                ['name' => 'Arpit Mishra',
                'email' => 'arpit.mishra.out@gmail.com',
                'job' => '<b></b>Software Developer</b>',
                'hobbies' => ['Coding', 'Reading', 'Playing Guitar']
            ]);
    }
}
