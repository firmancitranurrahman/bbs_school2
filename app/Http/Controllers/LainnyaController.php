<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Reffkota;
use App\Models\H2h;
use App\Models\User;
use Dirape\Token\Token;

use App\Models\Reffprodi;
use App\Models\Reffjenis;


class LainnyaController extends Controller
{
    //view
    public function tambahlainnya(){
        $user=User::all();

        return view('admin.tambahlainnya',['user'=>$user]);
    }

    public function storeh2h(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            // 'key'=>'required'
        ]);
       $data= H2h::create([
            'id_user'=>$request->id_user,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'key'=> Str::random(16),
            'url'=>url(sprintf($request->url, 333, 444)),
            'token'=>(new Token())->Unique('h2hs','token',16)

        ]);

        // return redirect('/listdata');
        return redirect(dd($data));
    }
   

    // =========== Crud Reff Kota ======= ///
    public function storekota(Request $request){    
        $this->validate($request,[
            'nama_kota' => 'required|min:2|max:50',
        ]);
        Reffkota::create([
            'nama_kota' => $request->nama_kota,
        ]);
        return redirect('/listdata');
    }
    public function updatekota(Request $request,$id){    
        $kota=Reffkota::find($id);
        $kota->nama_kota= $request->nama_kota;

        $kota->save();
        return redirect('/listdata');
    }
    public function deletekota($id){    
        $kota = Reffkota::find($id);
        $kota->delete();
        return redirect('/listdata');
    }
    
    // =========== Crud Reff Prodi ======= //
    public function storeprodi(Request $request){    
        $this->validate($request,[
            'nama_prodi' => 'required|min:2|max:50',
        ]);
        Reffprodi::create([
            'nama_prodi' => $request->nama_prodi,
        ]);
        return redirect('/listdata');
    }
    public function updateprodi(Request $request,$id){    
        $prodi=Reffprodi::find($id);
        $prodi->nama_prodi= $request->nama_prodi;

        $prodi->save();
        return redirect('/listdata');
    }
    public function deleteprodi($id){    
        $prodi = Reffprodi::find($id);
        $prodi->delete();
        return redirect('/listdata');
    }

    

    // =========== Crud Reff Jenis ======= //
    public function storejenis(Request $request){
        $this->validate($request,[
            'nama'=>'required'

        ]);
       $jenis = Reffjenis::create([
            // 'nama'=>Str::random(16)
            'nama'=>$request->nama
        ]);
        return dd($jenis);
        // return redirect('/listdata');
    }

    public function updatejenis(Request $request,$id){  
            // dd($id);
            $jenis=Reffjenis::find($id);
            $jenis->nama= $request-> nama;
            $jenis->save();

        return redirect('/listdata');
        

    }
    public function deletejenis($id){
        $jenis = Reffjenis::find($id);
        $jenis->delete();
        return redirect('/listdata');
    }
    
    public function datepicker(){
        return view('admin.datepicker');
    }
}


