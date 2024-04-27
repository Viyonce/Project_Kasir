<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan as ModelsPelanggan;
use Illuminate\Http\Request;

class Pelanggan extends Controller
{
    public function Pelanggan(){
        $cek = new ModelsPelanggan;
        return view('layout.Pelanggan', ['dataa' => $cek->all()]);
    }
    public function tambahpelangga(){
        return view('aksipelanggan.tambahpelanggan');
    }
    public function tambahpelanggan(Request $request){
        $k = new ModelsPelanggan;
        $k->create([
            'NamaPelanggan' => $request->input('NamaPelanggan'),
            'Alamat' => $request->input('Alamat'),
            'NomorTelepon' => $request->input('NomorTelepon'),
        ]);
        return redirect('Pelanggan');
    }
    public function editpelanggan($id) {
        $e = ModelsPelanggan::select('*')->where('PelangganID', $id)->get();
        return view('aksipelanggan.editpelanggan', ['dataa' => $e->all()]);
    }
    public function editpelangga(Request $request, $id) {
        $e = ModelsPelanggan::where('PelangganID', $id)->update([
            'NamaPelanggan' => $request->NamaPelanggan,
            'Alamat' => $request->Alamat,
            'NomorTelepon' => $request->NomorTelepon,
        ]);
        Return redirect('Pelanggan');
    }
    public function hapuspelanggan($id) {
        $k = ModelsPelanggan::where('PelangganID', $id)->delete();
        return back();
    }
}
