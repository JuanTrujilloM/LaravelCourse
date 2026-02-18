<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact us - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['description'] = 'This is a contact page ...';
        $viewData['name'] = 'Online Store';
        $viewData['direction'] = '123 Main St, Anytown, USA';
        $viewData['phone'] = '(555) 123-4567';

        return view('home.contact')->with('viewData', $viewData);
    }
}
