<?php

namespace App\Http\Controllers;

use App\Models\Reffjenis;
use App\Models\User;
use App\Models\ReffKota;
use App\Models\Reffprodi;
use App\Models\Va;
use Illuminate\Support\Str;


use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class VaController extends Controller
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
    public function tambahva(){
        $reffprodi=Reffprodi::all();
        $reffjenis=Reffjenis::all();

        return view('admin.tambahva',['reffprodi'=>$reffprodi,'reffjenis'=>$reffjenis]);
    }
    public function editva($id){
        $va=Va::find($id);
        $reffprodi=Reffprodi::all();

        return view('admin.editva',['va'=>$va,'reffprodi'=>$reffprodi]); 
    }
    
    public function storeva(Request $request){
        
        $this->validate($request,[
            'kode' =>'numeric',
            'no_induk'=>'required|numeric|min:10',
            'nama'=>'required',
            'prodi'=>'required',
            'tahun'=>'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'semester'=>'required',
            'status'=>'required',
            'nominal'=>'required|numeric'

        ]);
        // $kode=Str::random($request->kode,16);

        $data= Va::create([
          'kode'=>mt_rand(1000000000000000, 9999999999999999),
           'no_induk'=>$request->no_induk,
           'nama' =>$request->nama,
           'prodi' =>$request->prodi,
           'tahun' =>$request->tahun,
           'semester'=>$request-> semester,
           'tgl_bayar'=>$request-> tgl_bayar,
           'status'=>$request->status,
           'jenis'=>$request->jenis,

           'nominal' =>$request->nominal ,
        ]);
        // return redirect('/listdatava');
        return dd($data);
    }
    public function updateva(Request $request ,$id){
        $va= Va::find($id);
        $va->no_induk=$request->no_induk;
        $va->nama= $request->nama;
        $va->prodi= $request->prodi;
        $va->tahun= $request->tahun;
        $va->status=$request->status;
        
        $va->semester= $request->semester;
        $va->tgl_bayar= $request->tgl_bayar;
        $va->nominal= $request->nominal;
        $va->save();

        return redirect('listdatava');
    }

    public function deleteva($id){
     $va=Va::find($id);
     $va->delete();
     return redirect('listdatava');  
    }

    
}