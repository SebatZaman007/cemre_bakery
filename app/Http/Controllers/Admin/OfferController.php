<?php

namespace App\Http\Controllers\Admin;

use App\Models\offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class OfferController extends Controller
{
    public function offerIndex(Request $request){
        if ($request->ajax()) {
            $data = offer::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('offer.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('offer.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.offer.index');

    }

    public function offerCreate()
    {
        return view('admin.pages.offer.create');
    }

    public function offerStore(Request $request){
        offer::create([
            'offer'=>$request->offer,
            'title_1'=>$request->title_1,
            'title_2'=>$request->title_2,
            'description'=>$request->description
        ]);

        return redirect()->route('offer.index');
    }

    public function offerEdit($id){
        $edit=offer::where('id',$id)->first();
        return view('admin.pages.offer.edit',compact('edit'));
    }

    public function offerUpdate(Request $request){
        $id=$request->id;
        offer::where('id',$id)->update([
            'offer'=>$request->offer,
            'title_1'=>$request->title_1,
            'title_2'=>$request->title_2,
            'description'=>$request->description
        ]);


        return redirect()->route('offer.index');
    }

    public function offerDelete($id){
        offer::where('id',$id)->delete();
        return redirect()->route('offer.index');
    }
}
