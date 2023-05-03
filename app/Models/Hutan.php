<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hutan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tanam';
    protected $table = 'hutan';
    //protected $fillable = ['nip'];
    protected $guarded = [];

   
    
}
