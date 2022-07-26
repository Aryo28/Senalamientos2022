<?php

namespace Database\Seeders;

use App\Models\Simbologia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimbologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $simbologias = ['RESTRICTIVO', 'PREVENTIVO', 'INFORMATIVO', 'TURISTICO', 'DE SERVICIOS', 'INDEFINIDO'];


        foreach($simbologias as $simbologia){
            Simbologia::create([
                'nombre_clasificacion' => $simbologia
            ]);
        }
    }
}


// 210