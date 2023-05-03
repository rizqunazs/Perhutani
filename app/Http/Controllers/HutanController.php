<?php

namespace App\Http\Controllers;

use App\Models\Hutan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HutanController extends Controller
{
    public function index()
    {
        $data = Hutan::all();
        return view("backend.hutan.index")->with(['hutan' => $data]);
    }

    public function add()
    {
        return view("backend.hutan.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'id_tanam' => 'required',
            
        ]);

        $inserting = Hutan::create($request->except('_token'));
        if($inserting){
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id_tanam)
    {
        try {
            $data = Hutan::findOrFail($id_tanam);
            return view("backend.hutan.update")->with(['hutan' => $data]);
        } catch(\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $id_tanam)
    {
        $request->validate([
            'id_tanam' => 'required',
           
            
        ]);
        
        $process = Hutan::findOrFail($id_tanam)->update($request->except('_token'));
        if($process){
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id_tanam)
    {
        try {
            $process = Hutan::findOrFail($id_tanam)->delete();
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
