<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            'blog_image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:4000',
        ]);
        $id = $request->id;
        if (!empty($id)) {
            $blog = Blog::findorfail($id);
            $blog->blog_title = $request->blog_title;
            $blog->blog_description = $request->blog_description;
            $blog_image = $request->file('blog_image');
            if ($blog_image) {
                if (!empty($blog->blog_image)){
                    unlink($blog->blog_image);
                }
                $image_name = hexdec(uniqid());
                $ext = strtolower($blog_image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'upload/';
                $image_url = $upload_path . $image_full_name;
                $blog_image->move($upload_path, $image_full_name);
                $blog->blog_image = $image_url;
                $blog->save();
                $notification = array(
                    'messege' => 'Successfully Blog Updated With Image',
                    'alert-type' => 'success'
                );
            } else {
                $blog->save();
                $notification = array(
                    'messege' => 'Successfully Blog Updated Without Image',
                    'alert-type' => 'success'
                );
            }
            return redirect()->route('blog.all')->with($notification);
        } else {
        $blog = new Blog();
        $blog->blog_added_id = Auth::id();
        $blog->blog_title = $request->blog_title;
        $blog->blog_description = $request->blog_description;
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
    }

    public function all()
    {
        $blog = Blog::where('blog_added_id',Auth::id())->get();
        return view('backend.blog.all',compact('blog'));
    }
    public function edit($id)
    {
        $blog = Blog::findorfail($id);
        return view('backend.blog.edit',compact('blog'));
    }
    public function delete($id)
    {
        $blog = Blog::findorfail($id);
        if (File::exists($blog->blog_image)){
            unlink($blog->blog_image);
        }
        $delete = $blog->delete();
        if ($delete) {
            $notification=array(
                'messege'=>'Successfully Blog Deleted!',
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

    public function admin_blog_index()
    {
        $blog = Blog::all();
        return view('backend.admin.blog.home',compact('blog'));
    }

    public function admin_blog_change($id,$blog_status)
    {
        $update = Blog::where('id',$id)->update(array('blog_status'=>$blog_status));
        $blog_status = Blog::where('id',$id)->first()->blog_status;
        if($blog_status == '1')
        {
            Blog::where('id',$id)->update(array('blog_point'=>'5'));
        }
        if ($update) {
            $notification=array(
                'messege'=>'Successfully Blog Updated!',
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
