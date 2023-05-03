<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tebang;
use Illuminate\Http\Request;

class TebangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Tebang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'penanggung' => 'required',
            
        ]);

        $inserting = Tebang::create($request->except('_token'));
        if($inserting){
            return response()->json([
                'status' => true,
                'message' => 'Data Berhasil ditambahkan'
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data Gagal ditambahkan'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tebang)
    {
        return response()->json([
            'status' => true,
            'data' => Tebang::where('id_tebang', $id_tebang)->first()
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tebang)
    {
        $request->validate([
            'penanggung' => 'required',
           
            
        ]);
        
        $process = Tebang::findOrFail($id_tebang)->update($request->except('_token'));
        if($process){
            return response()->json([
                'status' => true,
                'message' => 'Data Berhasil diperbarui'
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Data Gagal diperbarui'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tebang)
    {
        try {
            $process = Tebang::findOrFail($id_tebang)->delete();
            if($process){
                return response()->json([
                    'status' => true,
                    'message' => 'Data Berhasil dihapus'
                ]);
            }else{
                return response()->json([
                    'status' => true,
                    'message' => 'Data Gagal dihapus'
                ]);
             }
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
