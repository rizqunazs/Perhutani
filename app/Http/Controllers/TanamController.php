<?php

namespace App\Http\Controllers;

use App\Models\Tanam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TanamController extends Controller
{
    public function index()
    {
        $data = Tanam::all();
        return view("backend.tanam.index")->with(['tanam' => $data]);
    }

    public function add()
    {
        return view("backend.tanam.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'penanggung' => 'required',
            'jns_tanaman' => 'required',
            'luas' => 'required',
            'tgl_perencanaan' => 'required',
            'tgl_pelaksanaan' => 'required',
            'status' => 'required',
            
        ]);

        $inserting = Tanam::create($request->except('_token'));
        if($inserting){
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id_tanam)
    {
        try {
            $data = Tanam::findOrFail($id_tanam);
            return view("backend.tanam.update")->with(['tanam' => $data]);
        } catch(\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $id_tanam)
    {
        $request->validate([
            'penanggung' => 'required',
            'jns_tanaman' => 'required',
            'luas' => 'required',
            'tgl_perencanaan' => 'required',
            'tgl_pelaksanaan' => 'required',
            'status' => 'required',
           
            
        ]);
        
        $process = Tanam::findOrFail($id_tanam)->update($request->except('_token'));
        if($process){
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id_tanam)
    {
        try {
            $process = Tanam::findOrFail($id_tanam)->delete();
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
