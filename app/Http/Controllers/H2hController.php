<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ReffKota;
use App\Models\H2h;


use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class H2hController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function tambahh2h(){
        $data=User::all();
        return view('admin.tambahh2h',['data'=>$data]);
    }
    public function edith2h(){
        return view('#');
    }

    // public function storeh2h(Request $request){
    //     $this->validate($request,[
    //         'username'=>'required',
    //         'password'=>'required',
    //         'key'=>'required'
    //     ]);
    //     $add=H2h::create([
    //         'username'=>$request->username,
    //         'password'=>$request->password,
    //         'key'=> $request->key
    //     ]);
    //         return redirect(dd($add));
    // }
    
    public function updateh2h(Request $request, $id){
        
    }

    
    public function deleteh2h(){
        
    }

   
    
}