<?php

namespace App\Http\Controllers;

use App\Models\Produk as ModelsProduk;
use Illuminate\Http\Request;

class Produk extends Controller
{
    public function produk(){
        $cek = new ModelsProduk;
            Return view('layout.produk',['data'=>$cek->all()]);
    }
    public function tambahprodu(){
        return view('aksi.tambahproduk');
    }
    public function tambahproduk(Request $request){
        $k =new ModelsProduk;
        $k->create([
            'NamaProduk'=>$request->input('NamaProduk'),
            'Harga'=>$request->input('Harga'),
            'Stok'=>$request->input('Stok'),
        ]);
        return redirect('produk');
    }
    public function editproduk($id){
        $e = ModelsProduk::select('*')->where('ProdukID', $id)->get();
        return view('aksi.editproduk', ['data' =>$e->all()]);
    }
    public function editprodu(Request $request, $id){
        $e = ModelsProduk::where('ProdukID',$id)->update([
            'NamaProduk'=>$request->NamaProduk,
            'Harga'=>$request->Harga,
            'Stok'=>$request->Stok,
        ]);
        return redirect('produk');
    }
    public function hapusproduk($id) {
        $k = ModelsProduk::where('ProdukID', $id)->delete();
        return back();
    }
}
