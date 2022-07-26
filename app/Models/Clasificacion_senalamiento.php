<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion_senalamiento extends Model
{
    use HasFactory;

    protected $fillable = ['img_id', 'simbologia_id', 'mantenimiento_senal', 'created_at', 'updated_at'];
}
