<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
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
    public function update(Request $request)
    {
        if (isset($request->settings))
        {
            foreach ($request->settings as $key => $value) {
                updatesettings($key, $value);
            }
            $notification=array(
                'messege'=>'Successfully Settings Updated',
                'alert-type'=>'success'
            );
        }
        else{
        $notification=array(
            'messege'=>'Something Wnt Wrong!',
            'alert-type'=>'error'
        );
        }
        return back()->with($notification);
    }

    public function homesettings()
    {
        $medicine = Medicine::all();
        return view('backend.settings.home',compact('medicine'));
    }

    public function settings_popular($id,$status)
    {
        if ($status==1)
        $update = Medicine::where('id',$id)->update(array('medicine_most_popular'=>0));
        else{
            $update = Medicine::where('id',$id)->update(array('medicine_most_popular'=>1));
        }
        if ($update) {
            $notification=array(
                'messege'=>'Successfully Popular Category Updated!',
                'alert-type'=>'success'
            );
        }else{
            $notification=array(
                'messege'=>'Something went wrong !',
                'alert-type'=>'error'
            );
        }
        return back()->with($notification);
    }
}
