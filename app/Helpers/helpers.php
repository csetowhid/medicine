<?php
use App\Models\Setting;


function getsettings($get = null)
{
    if ($get != null) {
        if (Setting::where('settings_title', $get)->count() == 1) {
            $settings_component = DB::table('settings')
                ->where('settings_title', $get)
                ->first()->settings_value;
            return $settings_component;

        } else {
            return 'Error: '.$get;
        }
    } else {
        return $get;
    }
}
