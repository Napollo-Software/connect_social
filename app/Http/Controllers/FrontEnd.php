<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEnd extends Controller
{
    public function index()
    {
        echo "Hello World";
    }

    public function under_construction()
    {
        $data['title'] = 'Under Construction';
        return view('default.construction');
    }
}