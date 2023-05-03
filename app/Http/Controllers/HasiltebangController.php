<?php

namespace App\Http\Controllers;

use App\Models\Hasiltebang;
use App\Models\Tebang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasiltebangController extends Controller
{
    public function index()
    {
        

      //  $data = Hasiltebang::all()
      $hasiltebang = Hasiltebang::get_hasil_tebang();
      //dd($hasiltebang);
//        $data2 = tebang::all();
        return view("backend.hasiltebang.index",['hasiltebang' => $hasiltebang]);
    }

    public function add()
    {
        return view("backend.hasiltebang.add");
    }

    public function processAdd(Request $request)
    {
        $request->validate([
            'id_tebang' => 'required',
            
        ]);

        $inserting = Hasiltebang::create($request->except('_token'));
        if($inserting){
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function update($id)
    {
        try {
            $data = Hasiltebang::findOrFail($id);
            return view("backend.hasiltebang.update")->with(['hasiltebang' => $data]);
        } catch(\Exception $e) {
            abort(404);
        }
    }

    public function processUpdate(Request $request, $id)
    {
        $request->validate([
            'id_tebang' => 'required',
           
            
        ]);
        
        $process = Hasiltebang::findOrFail($id)->update($request->except('_token'));
        if($process){
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        }else{
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        try {
            $process = Hasiltebang::findOrFail($id)->delete();
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
