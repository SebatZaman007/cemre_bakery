<?php

namespace App\Http\Controllers\Admin;

use App\Models\home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function homeIndex(Request $request){
        if ($request->ajax()) {
            $data = home::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('home.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('home.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->editColumn('logo',function ($data){
                    if($data->logo){
                        $url=asset(BlogImage().$data->logo);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })

                ->rawColumns(['action','logo'])
                ->make(true);
        }
        return view('admin.pages.home.index');
    }

    public function homeCreate(){
        return view('admin.pages.home.create');
    }

    public function homeStore(Request $request){
        if (!empty($request->logo)) {
            $logo = fileUpload($request['logo'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        home::create([
            'logo'=>$logo,
            'title'=>$request->title,
            'description_1'=>$request->description_1,
            'description_2'=>$request->description_2,
        ]);

        return redirect()->route('home.index');
    }

    public function homeEdit($id){
        $edit=home::where('id',$id)->first();
        return view('admin.pages.home.edit',compact('edit'));
    }

    public function homeUpdate(Request $request){
        $id= $request->id;

        if (!empty($request->logo)) {
            $logo = fileUpload($request['logo'], BlogImage());
        } else {
                $var=home::where('id',$id)->first();
                $logo=$var->logo;

        }


     home::where('id',$id)->update([
            'logo'=>$logo,
            'title'=>$request->title,
            'description_1'=>$request->description_1,
            'description_2'=>$request->description_2,
     ]);

     return redirect()->route('home.index');
    }

    public function homeDelete($id){
        home::where('id',$id)->delete();
        return redirect()->route('home.index');
    }
}




