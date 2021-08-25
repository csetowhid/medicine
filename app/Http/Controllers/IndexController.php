<?php

namespace App\Http\Controllers;

use App\Models\Alpha;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $alpha = Alpha::all();
        return view('home.homepage',compact('alpha'));
    }
    public function alpha_name($alpha_name)
    {
        dd($alpha_name);
    }
}
