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

    public function kyc_submit()
    {
        return view('kyc.form.index');
    }

    public function kyc_response()
    {
        return view('kyc.response.index');
    }
}