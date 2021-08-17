<?php

namespace App\Http\Controllers;

use App\Models\Alpha;
use Illuminate\Http\Request;

class AlphaController extends Controller
{
    public function alpha_index()
    {
        $alpha = Alpha::all();
        return view('backend.alpha.index',compact('alpha'));
    }
    public function alpha_create(Request $request)
    {
        $id = $request->alpha_id;
        if (isset($id))
        {
            $alpha = Alpha::findorfail($id);
            $alpha->alpha_name = $request->alpha_name;
            $alpha->alpha_description = $request->alpha_description;
            $update = $alpha->save();
            if($update) {
                $notification=array(
                    'messege'=>'Successfully Alpha Updated',
                    'alert-type'=>'success'
                );
            }else{
                $notification=array(
                    'messege'=>'Something Wnt Wrong!',
                    'alert-type'=>'error'
                );
            }
            return back()->with($notification);
        }else {
            $validated = $request->validate([
                'alpha_name' => 'required|unique:alphas',
                'alpha_description' => 'required',
            ]);
            $alpha = new Alpha();
            $alpha->alpha_name = $request->alpha_name;
            $alpha->alpha_description = $request->alpha_description;
            $insert = $alpha->save();
            if ($insert) {
                $notification = array(
                    'messege' => 'Successfully Alpha Added',
                    'alert-type' => 'success'
                );
            } else {
                $notification = array(
                    'messege' => 'Something Wnt Wrong!',
                    'alert-type' => 'error'
                );
            }
            return back()->with($notification);
        }
    }

    public function alpha_edit($id)
    {
        $alpha = Alpha::findorfail($id);
        return response()->json($alpha);
    }
}
