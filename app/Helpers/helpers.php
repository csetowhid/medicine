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

    function updatesettings($get = null, $value = null)
    {
        if ($get != null) {
            if (Setting::where('settings_title', $get)->count() == 1) {
                Setting::where('settings_title', $get)
                        ->update(array('settings_value' => $value));
                    return true;
            }
//            else {
//                return false;
//            }
            else {
                return 'Error: ' . $get;
            }
        } else {
            return false;

        }
    }

