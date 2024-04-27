<?php

namespace App\Http\Controllers;

use App\Models\Admin as ModelsAdmin;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function Login(){
       return view('layout.loginadmin');
    }
    public function forms(){
        return view('layout.admin');
    }
    public function tambahadmi() {
        return view('aksi.tambahadmin');
    }
    public function tambahadmin(Request $request)  {
        $k = new ModelsAdmin;
        $k->create([
            'NamaAdmin' => $request->input('NamaAdmin'),
            'Username' => $request->input('Username'),
            'Password' => $request->input('Password'),
        ]);
        return redirect('admin');
    }
    public function editadmin($id)  {
        $e = ModelsAdmin::select('*')->where('AdminID', $id)->get();
        return view('aksiadmin.editadmin', ['dataaa' => $e->all()]);
    }
    public function editadmi(Request $request, $id){
        $e = ModelsAdmin::where('AdminID', $id)->update([
            'NamaAdmin' => $request->NamaAdmin,
            'Username' => $request->Username,
            'Password' => $request->Password,
        ]);
        return redirect('admin');
    }
    public function hapusadmin($id){
        $k = ModelsAdmin::where('AdminID', $id)->delete();
        return back();
    }
}