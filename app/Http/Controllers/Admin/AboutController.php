<?php

namespace App\Http\Controllers\Admin;

use App\Models\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AboutController extends Controller
{
    public function aboutIndex(Request $request){

        if ($request->ajax()) {
            $data = about::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('about.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('about.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->editColumn('about_image',function ($data){
                    if($data->about_image){
                        $url=asset(BlogImage().$data->about_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })

                ->rawColumns(['action','about_image'])
                ->make(true);
        }

        return view('admin.pages.about.index');

    }

    public function aboutCreate(){
        return view('admin.pages.about.create');
    }

    public function aboutStore(Request $request){
        if (!empty($request->about_image)) {
            $about_image = fileUpload($request['about_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        about::create([
            'about_image'=>$about_image,
            'about_title'=>$request->about_title,
            'about_description'=>$request->about_description
        ]);

        return redirect()->route('about.index');
    }

    public function aboutEdit($id){
        $edit=about::where('id',$id)->first();

        return view('admin.pages.about.edit',compact('edit'));
    }

    public function aboutUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->about_image)) {
            $about_image = fileUpload($request['about_image'], BlogImage());
        } else {
            $var=about::where('id',$id)->first();
            $about_image=$var->about_image;
        }



        about::where('id',$id)->update([
            'about_image'=>$about_image,
            'about_title'=>$request->about_title,
            'about_description'=>$request->about_description

        ]);

        return redirect()->route('about.index');


    }

    public function aboutDelete($id){
        about::where('id',$id)->delete();
        return redirect()->route('about.index');
    }
}
