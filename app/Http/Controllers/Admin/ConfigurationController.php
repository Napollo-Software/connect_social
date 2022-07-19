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
        $config=[$request->check=>$request->all()];
        $config=serialize($config);
        if(Settings::all()->count()<1)
        { 
            $data = new Settings();
            $data->configurations=$config;
            $data->save();
        }
        else
        {
            $data = Settings::first();
            $config=unserialize($data->configurations);
            if(array_key_exists($request->check,$config))
            {
                $config[$request->check]=$request->all();
            }
            else
            {
                $config += [$request->check=>$request->all()];
            }
            $config=serialize($config);
            $data->configurations=$config;
            $data->save();
        }
        return response()->json('Added Successfully');
    }
}
