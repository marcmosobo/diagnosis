<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosis;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function searchQ(Request $request){
        $searcheddiagnoses = Diagnosis::where([
            [function ($query) use ($request){
                if (($search = $request->search)){
                    $query->orWhere('symptoms','LIKE','%'.$search.'%')->get();
                    $query->orWhere('disease_description','LIKE','%'.$search.'%')->get();
                }
            }]
        ])
        ->orderBy('id','desc')
        ->paginate(10);       
        return view('search',compact('searcheddiagnoses'))
        ->with('i',(request()->input('page',1)- 1)* 5);
    }
}
