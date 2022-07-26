<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion_senalamiento;
use App\Models\Senalamiento_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;  

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Senalamiento_image::all();
        return view('senalamientos.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = Senalamiento_image::find($id);
        $clasificacion = DB::table('simbologia_senalamiento')->select('id','nombre_clasificacion')->get();

        return view('senalamientos.create', compact('data', 'clasificacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $img_evaluated = Senalamiento_image::find($id);
        $img_evaluated->img_status = 0;
        $img_evaluated->save();

        $next_img = $id+1;


        $senalamiento = Clasificacion_senalamiento::create([
            'img_id' => $id,
            'simbologia_id'=> $request->simbologia_id,
            'mantenimiento_senal' => $request->mantenimiento_senal,
            'created_at' => Carbon::now(),
        ]);

        if($request->cantidad_senales == "1"){
            return redirect()->route('calificar.senalamiento', ['id'=>$id]);
        }else{
            return redirect()->route('calificar.senalamiento', ['id'=>$next_img]);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Senalamiento_image $senalamiento)
    {
        //$imagen = Senalamiento_image::find($id);
        $data = Clasificacion_senalamiento::where('img_id', $senalamiento->id)->first();
        $clasificacion = DB::table('simbologia_senalamiento')->select('id','nombre_clasificacion')->get();

        return view('senalamientos.edit',compact('senalamiento','clasificacion', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasificacion_senalamiento $senalamiento)
    {

        /*$clasif = Clasificacion_senalamiento::find($id);
        $clasif->img_id = $senalamiento->id;
        $clasif->simbologia_id = $request->simbologia_id;
        $clasif->mantenimiento_senal = $request->mantenimiento_senal;
        $clasif->update();
        */
        $senalamiento->update($request->all());


        return redirect()->route('senalamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
