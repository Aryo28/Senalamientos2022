<?php

namespace App\Http\Controllers;

use App\Models\Senalamiento_image;
use Illuminate\Http\Request;


class DatatableController extends Controller
{
    public function images(){
       // $images = Senalamiento_image::all(); 

        return datatables()->collection(Senalamiento_image::all())->toJson();
    }
}
