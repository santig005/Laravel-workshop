<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is a description of the about page';
        $viewData['author'] = 'Developed by: Santiago';

        return view('home.about')->with('viewData', $viewData);
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact us - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['description'] = 'These are the means you can use to communicate with us ...';
        $viewData['author'] = 'Developed by: Santiago';
        $viewData['email'] = 'Email: saj@gmail.com';
        $viewData['address'] = 'Address: Medellín - Co';
        $viewData['phone_number'] = 'Phone number: +57 123 456 7890';

        return view('home.contact')->with('viewData', $viewData);
    }
}
