<?php

namespace App\Http\Controllers;

use App\Models\Sub_alpha;
use App\Models\Subalpha;
use Illuminate\Http\Request;

class SubAlphaController extends Controller
{
    public function sub_alpha_index()
    {
        $subalpha = Subalpha::all();
        return view('backend.subalpha.index',compact('subalpha'));
    }
    public function sub_alpha_create(Request $request)
    {
        $id = $request->sub_alpha_id;
        if (isset($id))
        {
            $subalpha = Subalpha::findorfail($id);
            $subalpha->sub_alpha_name = $request->sub_alpha_name;
            $subalpha->sub_alpha_description = $request->sub_alpha_description;
            $update = $subalpha->save();
            if($update) {
                $notification=array(
                    'messege'=>'Successfully Sub Alpha Updated',
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
                'sub_alpha_name' => 'required|unique:subalphas',
                'sub_alpha_description' => 'required',
            ]);
            $subalpha = new SubAlpha();
            $subalpha->sub_alpha_name = $request->sub_alpha_name;
            $subalpha->sub_alpha_description = $request->sub_alpha_description;
            $insert = $subalpha->save();
            if ($insert) {
                $notification = array(
                    'messege' => 'Successfully Sub Alpha Added',
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

    public function sub_alpha_edit($id)
    {
        $subalpha = Subalpha::findorfail($id);
        return response()->json($subalpha);
    }

    public function sub_alpha_delete($id)
    {
        $subalpha = Subalpha::findorfail($id);
        $delete = $subalpha->delete();
        if ($delete) {
            $notification=array(
                'messege'=>'Successfully Sub Alphabet Deleted!',
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
