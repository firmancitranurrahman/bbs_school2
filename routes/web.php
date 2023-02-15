<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Models\Reffjenis;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\H2hController;
use App\Http\Controllers\VaController;
use App\Http\Controllers\RolePermissionController;

use App\Http\Controllers\LainnyaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('duar', function () {
    return view('admin.index2');
});
Route::get('modal', function () {
    return view('admin.modal');
});
Route::get('master', function () {
    return view('layouts.master');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


                        // ====================Super Admin ====================//
Route::middleware(['role:superadmin'])->group(function () {
    Route::get('index', [AdminController::class,'index'])->name("index");
    // ======== View User======= //
    Route::get('tambahuser',    [AdminController::class,'tambahuser'])->name('superadmin.tambahuser');
    Route::get('listdata',      [AdminController::class,'listdata'])->name('listdata');
    Route::get('listdatauser',  [AdminController::class,'listdatauser'])->name('listdatauser');
    Route::get('listdatava',    [AdminController::class,'listdatava'])->name('listdatava');
    Route::get('listdatah2h',   [AdminController::class,'listdatah2h'])->name('listdatah2h');
    Route::get('/listdatarp',    [AdminController::class,'listdatarp'])->name('listdatarp');
    Route::get('tambahuser',    [AdminController::class,'tambahuser'])->name('tambahuser');
    Route::get('/edit/{id}',    [AdminController::class,'edit'])->name('editdata');

    // =========== Role And Permission ===== //

    // =========== Proses User ======= //
    Route::post('/store',      [AdminController::class,'store'])->name('create');
    Route::put('/update/{id}', [AdminController::class,'update'])->name('update');
    Route::get('/delete/{id}', [AdminController::class,'delete'])->name('delete');

    // =========== View H2h =============== //
    Route::get('/tambahh2h',[H2hController::class,'tambahh2h'])->name('superadmin.tambahh2h');
     // ===========View VA =============== //
    Route::get('/tambahva',[VaController::class,'tambahva'])->name('superadmin.tambahva');
    Route::get('/editva/{id}',[VaController::class,'editva'])->name('editva');
    // Route::get('/editva/{id}',[VaController::class],'')->name('');
    //========= View Lainnyaa ============ //
    Route::get('/tambahlainnya',[LainnyaController::class,'tambahlainnya'])->name('superadmin.tambahlainnya');

    // =============== PROSES KOTA ============= //
    Route::post('/storekota',[LainnyaController::class,'storekota']);
    Route::get('/deletekota/{id}', [LainnyaController::class,'deletekota']);
    Route::put('/updatekota/{id}', [LainnyaController::class,'updatekota']);

    // ============ PROSES PRODI  ============ //
    Route::post('/storeprodi',[LainnyaController::class,'storeprodi']);
    Route::get('/deleteprodi/{id}', [LainnyaController::class,'deleteprodi']);
    Route::put('/updateprodi/{id}', [LainnyaController::class,'updateprodi']);

    // =========== Proses Virtual Account ===== //
    Route::post('/storeva',[VaController::class,'storeva']);
    Route::get('/deleteva/{id}', [VaController::class,'deleteva']);
    Route::put('/updateva/{id}', [VaController::class,'updateva'])->name('updateva');
    
    // =========== Proses Jenis ============ ///
    Route::post('/storejenis',[LainnyaController::class,'storejenis']);
    Route::get('/deletejenis/{id}', [LainnyaController::class,'deletejenis']);
    // Route::put('/updatejenis/{ id }', [LainnyaController::class,'updatejenis']);
    Route::put('/updatejenis/{id}', function (Request $request,$id) {
        $jenis=Reffjenis::find($id);
        $jenis->nama= $request-> nama;
        $jenis->save();
        return redirect('/listdata');
     });
    // =========== Proses H2H ============= //
    Route::post('/storeh2h',[LainnyaController::class,'storeh2h']);
    Route::put('/updateh2h/{id}',[H2hController::class,'updateh2h']);
    Route::post('/deleteh2h/{id}',[H2hController::class,'deleteh2h']);

    
    // ===== Permission Proses ======== //
    Route::post('/storepermission',[RolePermissionController::class,'storepermission']);
    // Route::put('/updatepermission/{id}',[RolePermissionController::class],'updatepermission');
    Route::put('/updatepermission/{id}', [RolePermissionController::class, 'updatepermission'])->name('home');

    Route::get('/deletepermission/{id}', [RolePermissionController::class,'deletepermission']);

    //===== Asigment Permission ===== //
    Route::post('/givePermission/{role}',[RolePermissionController::class,'givePermission']);
    Route::delete('/revokePermission/{permission}',[RolePermissionController::class,'revokePermission']);
});

                        // ==================== End Super Admin ================ //

// Route::get('/index',[AdminController::class,'index'])->name('index');











