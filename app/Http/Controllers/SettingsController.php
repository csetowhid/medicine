<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('backend.settings.index',compact('settings'));
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
            'settings_title' => 'required',
            'settings_value' => 'required',
        ]);
        $settings = new Setting();
        $settings->settings_title = $request->settings_title;
        $settings->settings_value = $request->settings_value;
        $insert = $settings->save();
        if($insert) {
            $notification=array(
                'messege'=>'Successfully Settings Added',
                'alert-type'=>'success'
            );
        }else{
            $notification=array(
                'messege'=>'Something Wnt Wrong!',
                'alert-type'=>'error'
            );
        }
        return back()->with($notification);
    }
}
