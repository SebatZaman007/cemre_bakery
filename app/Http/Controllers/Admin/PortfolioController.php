<?php

namespace App\Http\Controllers\Admin;

use App\Models\portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PortfolioController extends Controller
{
    public function portfolioIndex(Request $request){
        if ($request->ajax()) {
            $data = portfolio::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('portfolio.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('portfolio.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->editColumn('portfolio_image',function ($data){
                    if($data->portfolio_image){
                        $url=asset(BlogImage().$data->portfolio_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })

                ->rawColumns(['action','portfolio_image'])
                ->make(true);
        }

        return view('admin.pages.portfolio.index');
    }

    public function portfolioCreate(){
        return view('admin.pages.portfolio.create');
    }

    public function portfolioStore(Request $request){
        if (!empty($request->portfolio_image)) {
            $portfolio_image = fileUpload($request['portfolio_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        portfolio::create([
            'portfolio_image'=>$portfolio_image,
            'portfolio_productname'=>$request->portfolio_productname,
            'portfolio_rate'=>$request->portfolio_rate
        ]);

        return redirect()->route('portfolio.index');

    }

    public function portfolioEdit($id){
        $edit=portfolio::where('id',$id)->first();
        return view('admin.pages.portfolio.edit',compact('edit'));
    }

    public function portfolioUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->portfolio_image)) {
            $portfolio_image = fileUpload($request['portfolio_image'], BlogImage());
        } else {
            $var=portfolio::where('id',$id)->first();
            $portfolio_image= $var->portfolio_image;

        }

        portfolio::where('id',$id)->update([
            'portfolio_image'=>$portfolio_image,
            'portfolio_productname'=>$request->portfolio_productname,
            'portfolio_rate'=>$request->portfolio_rate,
        ]);

        return redirect()->route('portfolio.index');


    }

    public function portfolioDelete($id){
        portfolio::where('id',$id)->delete();
        return redirect()->route('portfolio.index');
    }
}
