<?php

namespace App\Http\Controllers;

use App\Models\Hasiltanam;
use App\Models\Tanam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasiltanamController extends Controller
{
    public function index()
    {
        

      //  $data = Hasiltanam::all()
      $hasiltanam = Hasiltanam::get_hasil_tanam();
      //dd($hasiltanam);
//        $data2 = tanam::all();
        return view("backend.hasiltanam.index",['hasiltanam' => $hasiltanam]);
    }

    public function add()
    {
        return view("backend.hasiltanam.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'id_tanam' => 'required',
            
        ]);

        $inserting = Hasiltanam::create($request->except('_token'));
        if($inserting){
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id)
    {
        try {
            $data = Hasiltanam::findOrFail($id);
            return view("backend.hasiltanam.update")->with(['hasiltanam' => $data]);
        } catch(\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $id)
    {
        $request->validate([
            'id_tanam' => 'required',
           
            
        ]);
        
        $process = Hasiltanam::findOrFail($id)->update($request->except('_token'));
        if($process){
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        try {
            $process = Hasiltanam::findOrFail($id)->delete();
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
