<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Cocur\Slugify\Slugify;
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
        foreach ($request->title as $k=>$v) {
            $slugify = new Slugify();
            $key=$slugify->slugify($request->title[$k]);
            $exists=Settings::where('key',$key)->first();
            if ($exists){
                $setting=$exists;
            }else{
                $setting=new Settings();
            }
            $setting->value=$request->value[$k];
            $setting->title=$request->title[$k];
            $setting->key=$key;
            $setting->save();
        }

        return response()->json(['success'=>'Configurations updated successfully']);
    }
    public function getSlugFromTitle(Request $request){
        $slugify = new Slugify();
        $key=$slugify->slugify($request->title);
        return response()->json(getConfigValue($key));
    }
}
