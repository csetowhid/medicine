<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        return view('backend.blog.index');
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'blog_title' => 'required',
            'blog_description' => 'required',
            'blog_seo_title' => 'required|max:60',
            'blog_seo_permalink' => 'required',
            'blog_seo_description' => 'required|max:160',
            'blog_image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:4000',
        ]);
        $blog = new Blog();
        $dom = getsettings('domain_name') . "/" . $request->blog_seo_title;
        $blog->blog_added_id = Auth::id();
        $blog->blog_title = $request->blog_title;
        $blog->blog_description = $request->blog_description;
        $blog->blog_seo_title = $dom;
        $blog->blog_seo_permalink = $request->blog_seo_permalink;
        $blog->blog_seo_description = $request->blog_seo_description;
        $blog_image = $request->file('blog_image');
        if ($blog_image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($blog_image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'upload/';
            $image_url = $upload_path . $image_full_name;
            $blog_image->move($upload_path, $image_full_name);
            $blog->blog_image = $image_url;
            $blog->save();
            $notification = array(
                'messege' => 'Successfully Blog Added With Image',
                'alert-type' => 'success'
            );
        } else {
            $blog->save();
            $notification = array(
                'messege' => 'Successfully Blog Added Without Image',
                'alert-type' => 'success'
            );
        }
        return redirect()->route('blog.all')->with($notification);
    }

    public function all()
    {
        $blog = Blog::where('blog_added_id',Auth::id())->get();
        return view('backend.blog.all',compact('blog'));
    }
}
