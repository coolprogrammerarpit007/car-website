<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        // return view('home.index');
        // Rendering view using different Facades
        // return View::make('home.index');

        // if(!View::exists('home.index'))
        // {
        //     dump('View Does not exist!');
        // }
        // return View::first(['index','home.index']); // this will rendex first index file in the view directory or look into home foler and render home.index

        // another method to send data to view file
        // return view('home.index')->with(['name' => 'John Doe', 'email' => 'john@gmail.com']);

        // return view('home.index',[
        //     'name' => 'Arpit Mishra',
        //     'email' => 'arpit@gmail.com'
        // ]);

        return View::make('home.index');
    }
}
