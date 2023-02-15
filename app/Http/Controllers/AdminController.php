<?php

namespace App\Http\Controllers;

use App\Models\Reffjenis;
use App\Models\User;
use App\Models\ReffKota;
use App\Models\ReffProdi;
use App\Models\H2h;
use Dirape\Token\Token;
use Spatie\Permission\Models\Permission;


use Spatie\Permission\Models\Role;

use App\Models\Va;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AdminController extends Controller
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
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //======== View ========////
    public function index()
    {
        return view('admin.dashboard');
    }
    public function listdata()
    {
        $role= Role::all();
        // $users = User::all();
        $reffkota= Reffkota::all();
        $reffprodi= Reffprodi::all();
        $reffjenis= Reffjenis::all();

        $users = DB::table('users as u')
        ->leftJoin('reffkotas as r', 'u.kota', '=', 'r.id')
        ->select('u.*', 'r.nama_kota')
        ->get();
        // dd($users);
        return view('admin.listdata',['role'=>$role,'users'=>$users,'reffprodis'=>$reffprodi,'reffkotas'=>$reffkota,'reffjenis'=>$reffjenis]);
    }
    public function listdatauser(){
        $roles= Role::all();

        $reffkota= Reffkota::all();
        // $users = DB::table('users as users')
        $users=User::with('roles')
        ->leftJoin('reffkotas as r', 'users.kota', '=', 'r.id')
        ->select('users.*', 'r.nama_kota')
        ->get();
        if ($users == null) {
            # code...
            return response()->json($users);

        }else {
            // return redirect(dd($users));
            # code...
            return view('admin.listdatauser',['roles'=>$roles,'users'=>$users,'reffkota'=>$reffkota]);

        }

    }
    public function listdatava(){
        $reffprodi=ReffProdi::all();

        $va = DB::table('vas as v')
        ->leftJoin('reffprodis as rp','v.prodi','=','rp.id')
        ->select('v.*','rp.nama_prodi')
        ->get();
        return view('admin.listdatava',['va'=>$va,'reffprodi'=>$reffprodi]);
    }

    public function listdatah2h(){
        $h2h= H2h::all();

        return view('admin.listdatah2h',['h2h'=>$h2h]);
    }

    public function tambahuser()
    {
        $roles= Role::all();

    	$reffkota = Reffkota::all();
        return view('admin.tambahuser',['roles'=>$roles,'reffkota'=>$reffkota]);
    }
   
    public function edit($id){

        $user = User::find($id);
        $reffkota = Reffkota::all();

        return view('admin.editdata', ['user' => $user,'reffkota'=>$reffkota]);
    }

   public function  listdatarp(){
        // $role=Role::all();
        $role=Role::with("permissions")->get();
        $permission= Permission::all();
        return view('admin.listdatarp',['role'=>$role,'permission'=>$permission]);
   }
    
    // ========= Proses ======= //
    public function store(Request $request,Role $role){
            $this->validate($request,[
                'name' => 'required|min:2|max:50',
                'email' => 'required',
                'password' => 'required',
                'alamat' => 'required',
                'ip_address'=>'required|ipv4',
                'no_rekening'=>'required|max:15',
                'kota' => 'required',
                'role_id' => 'required|numeric'
            ]); 
           $user= User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password'=>bcrypt($request->password),
                'alamat'=>$request->alamat,
                'ip_address'=>$request->ip_address,
                'kota'=>$request->kota,
                'status'=>$request->status,
                'no_rekening'=>$request->no_rekening,

                'token'=>(new Token())->Unique('users','token',16)
            ]);
            $role = Role::findOrFail($request->role_id);
            $user->assignRole($role);

            return redirect('/listdatauser');
    }
    public function update(Request $request, $id)
    {   
       
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->ip_address = $request->ip_address;
        $user->kota = $request->kota;
        $user-> status= $request->status;

        $user->no_rekening = $request->no_rekening;
        $user->save();
    
        return redirect('listdatauser');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect('/listdata');
    }

    

    
    
}
