<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Hasiltanam extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'hasiltanam';
    //protected $fillable = ['nip'];
    protected $guarded = [];

    public static function get_hasil_tanam()
    {
        return DB::table('hasiltanam')
            ->join('tanam', 'tanam.id_tanam', '=', 'hasiltanam.id_tanam')
            ->select('*')
            ->get();
    }

   
    
}
