<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanam extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tanam';
    protected $table = 'tanam';
    //protected $fillable = ['nip'];
    protected $guarded = [];

   
    
}
