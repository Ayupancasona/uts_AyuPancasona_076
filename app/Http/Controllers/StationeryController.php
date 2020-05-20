<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;
use App\Exports\TokoExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class StationeryController extends Controller
{ 
    public function index(Request $request)
    {
        if ($request->has('cari')){
            $data_toko = \App\Toko::where('nama_barang', 'LIKE','%'.$request->cari.'%')->orWhere('kode_barang','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_toko = \App\Toko::all();
        }
    	// view adalh function untuk memanggil file untuk  ditmpilkan pd get_browser
    	
    	return view('toko.index',['data_toko' => $data_toko]);
    }
    public function export_excel()
    {
        return Excel::download(new TokoExport, 'toko.xlsx');
    }

    public function create(Request $request)
    {
    	\App\Toko::create($request->all());
    	return redirect('/toko')->with('sukses','Data Berhasil Diinput');
    }
    public function edit($id)
    {
        $data = \App\Toko::find($id);
        // dd($data);
        return view('/toko/edit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $data = \App\Toko::find($id);
        $data->update($request->all());
        return redirect('/toko')->with('sukses' , 'Data Berhasil Diupdate');
        
    }
    public function delete($id)
    {
        $data = \App\Toko::find($id);
        $data->delete();
        return redirect('/toko')->with('sukses' , 'Data Berhasil Dihapus');
    }
}