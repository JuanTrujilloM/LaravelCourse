<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ApiTestController extends Controller
{
    public function index(): View
    {
        return view('api.test');
    }
}
