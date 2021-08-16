<?php

namespace App\Http\Controllers;

use App\Models\Alpha;
use Illuminate\Http\Request;

class AlphaController extends Controller
{
    public function alpha_index()
    {
        return view('backend.alpha.index');
    }
    public function alpha_create(Request $request)
    {
        $validated = $request->validate([
            'alpha_name' => 'required|unique:alphas',
            'alpha_description' => 'required',
        ]);

        $alpha = new Alpha();
        $alpha->alpha_name = $request->alpha_name;
        $alpha->alpha_description = $request->alpha_description;
        $insert = $alpha->save();
        if($insert) {
            $notification=array(
                'messege'=>'Successfully Alpha Added',
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
