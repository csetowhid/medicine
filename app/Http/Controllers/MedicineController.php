<?php

namespace App\Http\Controllers;

use App\Models\Alpha;
use App\Models\Subalpha;
use Illuminate\Http\Request;
use App\Models\Medicine;
//use DataTables;
class MedicineController extends Controller
{
    public function index()
    {
        $alpha = Alpha::all();
        $subalpha = Subalpha::all();
        return view('backend.medicine.index',compact('alpha','subalpha'));
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
            'medicine_name' => 'required',
            'medicine_generic_name' => 'required',
            'medicine_brand_name' => 'required',
            'medicine_drug_class' => 'required',
            'medicine_description' => 'required',
            'medicine_seo_title' => 'required|max:60',
            'medicine_seo_permalink' => 'required',
            'medicine_seo_description' => 'required|max:160',
            'medicine_status' => 'required',
            'medicine_image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:4000',
        ]);
        $id = $request->id;
        if (isset($id)){
            $medicine = Medicine::findorfail($id);
            $medicine->medicine_name = $request->medicine_name;
            $medicine->medicine_generic_name = $request->medicine_generic_name;
            $medicine->medicine_brand_name = $request->medicine_brand_name;
            $medicine->medicine_drug_class = $request->medicine_drug_class;
            $medicine->medicine_description = $request->medicine_description;
            $medicine->medicine_seo_title = $request->medicine_seo_title;
            $medicine->medicine_seo_permalink = $request->medicine_seo_permalink;
            $medicine->medicine_seo_description = $request->medicine_seo_description;
            $medicine->medicine_status = $request->medicine_status;
            $medicine_image=$request->file('medicine_image');
            if($medicine_image) {
                if (isset($medicine->medicine_image)){
                    unlink($medicine->medicine_image);
                }
                $image_name=hexdec(uniqid());
                $ext=strtolower($medicine_image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='upload/';
                $image_url=$upload_path.$image_full_name;
                $medicine_image->move($upload_path,$image_full_name);
                $medicine->medicine_image=$image_url;
                $medicine->save();
                $notification=array(
                    'messege'=>'Successfully Medicine Updated With Image',
                    'alert-type'=>'success'
                );
            }else{
                $medicine->save();
                $notification=array(
                    'messege'=>'Successfully Medicine Updated Without Image',
                    'alert-type'=>'success'
                );
            }
            return redirect()->route('medicine.all')->with($notification);
        }else {
            $medicine = new Medicine();
            $dom = getsettings('domain_name') . "/" . $request->medicine_seo_title;
            $medicine->medicine_name = $request->medicine_name;
            $medicine->medicine_generic_name = $request->medicine_generic_name;
            $medicine->medicine_brand_name = $request->medicine_brand_name;
            $medicine->medicine_drug_class = $request->medicine_drug_class;
            $medicine->medicine_description = $request->medicine_description;
            $medicine->medicine_seo_title = $dom;
            $medicine->medicine_seo_permalink = $request->medicine_seo_permalink;
            $medicine->medicine_seo_description = $request->medicine_seo_description;
            $medicine->medicine_status = $request->medicine_status;
            $medicine_image = $request->file('medicine_image');
            if ($medicine_image) {
                $image_name = hexdec(uniqid());
                $ext = strtolower($medicine_image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'upload/';
                $image_url = $upload_path . $image_full_name;
                $medicine_image->move($upload_path, $image_full_name);
                $medicine->medicine_image = $image_url;
                $medicine->save();
                $notification = array(
                    'messege' => 'Successfully Medicine Added With Image',
                    'alert-type' => 'success'
                );
            } else {
                $medicine->save();
                $notification = array(
                    'messege' => 'Successfully Medicine Added Without Image',
                    'alert-type' => 'success'
                );
            }
            return redirect()->route('medicine.all')->with($notification);
        }
    }

    public function all()
    {
        $data = Medicine::all();
        if (request()->ajax()){
            return datatables()->of($data)
//            ->make(true);
                ->editColumn('status', function ($data) {
                    return $data->medicine_status ? '<button style="margin-top: 0;" class="btn btn-sm btn-pill btn-gradient-dark">Active</button>' : '<button style="margin-top: 0;" class="btn btn-sm btn-pill btn-gradient-light">InActive</button>';
                })
                ->addColumn('Actions',function ($data){
                    $button= '<a href="medicine_edit/'.$data->id.'"><button style="margin-top: 0;" class="btn btn-sm btn-pill btn-gradient-primary">Edit</button></a>';

                    $button .= '<a href="medicine_delete/'.$data->id.'"><button style="margin-top: 0;" class="btn btn-pill btn-sm btn-gradient-danger">Delete</button></a>';

//                    onclick="confirm('{{ URL::to('dashboard/education/delete/' . $key->id) }}')"
                    return $button;
                })
                ->rawColumns(['Actions','status'])
                ->make(true);
        }
        return view('backend.medicine.all');
    }

    public function medicine_delete($id)
    {
        $medicine = Medicine::findorfail($id);
        $delete = $medicine->delete();
        if ($delete) {
            $notification=array(
                'messege'=>'Successfully Medicine Deleted!',
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

    public function medicine_edit($id)
    {
        $medicine = Medicine::findorfail($id);
        return view('backend.medicine.edit',compact('medicine'));
    }
}
