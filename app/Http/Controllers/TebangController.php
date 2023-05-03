<?php

namespace App\Http\Controllers;

use App\Models\Tebang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TebangController extends Controller
{
    public function index()
    {
        $data = Tebang::all();
        return view("backend.tebang.index")->with(['tebang' => $data]);
    }

    public function add()
    {
        return view("backend.tebang.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'penanggung' => 'required',
            'jenis_tanaman' => 'required',
            'luas' => 'required',
            'tanggal_perencanaan' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'status' => 'required',
        ]);

        $inserting = Tebang::create($request->except('_token'));
        if($inserting){
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id_tebang)
    {
        try {
            $data = Tebang::findOrFail($id_tebang);
            return view("backend.tebang.update")->with(['tebang' => $data]);
        } catch(\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $id_tebang)
    {
        $request->validate([
            'penanggung' => 'required',
            'jenis_tanaman' => 'required',
            'luas' => 'required',
            'tanggal_perencanaan' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'status' => 'required',
            
        ]);
        
        $process = Tebang::findOrFail($id_tebang)->update($request->except('_token'));
        if($process){
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id_tebang)
    {
        try {
            $process = Tebang::findOrFail($id_tebang)->delete();
            if($process){
            return redirect()->back()->with("success", "Data berhasil dihapus");
        }else{
            return redirect()->back()->withErrors("Terjadi kesalahan saat menghapus data");
        }
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
