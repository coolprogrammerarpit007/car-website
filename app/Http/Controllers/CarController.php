<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return "This is index method from the CarController";
    }
    public function create()
    {
        return "This is create method from the CarController";
    }
    public function edit()
    {
        return "This is edit method from the CarController";
    }
    public function delete()
    {
        return "This is delete method from the CarController";
    }
}
