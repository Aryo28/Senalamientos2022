<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simbologia extends Model
{
    use HasFactory;

    protected $table = 'simbologia_senalamiento';

    protected $fillable =[
        'nombe',
        'clasificacion'
    ];

    public $timestamps = false;

}
