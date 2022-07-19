<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class ConfigurationController extends Controller
{
    public function merchantConfig()
    {
        return view('admin.configuration.merchant_config');
    }

    public function ambassadorConfig()
    {
        return view('admin.configuration.ambassador_config');
    }

    public function  updateAmbassadorConfig(Request $request)
    {
        dd($request->all());
        
        return response()->json('Added Successfully');
    }
}
