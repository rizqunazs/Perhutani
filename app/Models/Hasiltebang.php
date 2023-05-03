<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Hasiltebang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'hasiltebang';
    //protected $fillable = ['nip'];
    protected $guarded = [];

    public static function get_hasil_tebang()
    {
        return DB::table('hasiltebang')
            ->join('tebang', 'tebang.id_tebang', '=', 'hasiltebang.id_tebang')
            ->select('*')
            ->get();
    }

   
    
}
