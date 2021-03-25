<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = "Estudiante";
    protected $fillabele = ['id','name','code','carrera_id','state','created_at','updated_at'];
}
