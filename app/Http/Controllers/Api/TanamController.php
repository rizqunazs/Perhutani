<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tanam;

class TanamController extends Controller
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
            'data' => Tanam::all()
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
            
            
        ]);

        $inserting = Tanam::create($request->except('_token'));
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
    public function show($id_tanam)
    {
        
        return response()->json([
            'status' => true,
            'data' => Tanam::where('id_tanam', $id_tanam)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tanam)
    {
        $request->validate([
            'penanggung' => 'required',
            'luas' => 'required',
            'jns_tanaman' => 'required',
           
            
        ]);
        
        $process = Tanam::findOrFail($id_tanam)->update($request->except('_token'));
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
    public function destroy($id_tanam)
    {
        try {
            $process = Tanam::findOrFail($id_tanam)->delete();
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
