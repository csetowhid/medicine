<?php

namespace App\Http\Controllers;

use App\Models\Alpha;
use App\Models\Subalpha;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $alpha = Alpha::all();
        return view('frontend.index',compact('alpha'));
    }
    public function alpha_name($id)
    {
        $alpha = Alpha::findorfail($id);
        $alpha_name = $alpha->alpha_name;
        $sub_alpha = Subalpha::where('alpha_id',$id)->get();
        return view('frontend.subindex',compact('alpha_name','sub_alpha'));
    }
}
