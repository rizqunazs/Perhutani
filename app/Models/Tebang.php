<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tebang extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tebang';
    protected $table = 'tebang';
    protected $guarded = [];
}
