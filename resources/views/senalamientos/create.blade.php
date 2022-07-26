<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="{{  url('css/custom.css') }}">

    <title>Clasificar</title>
</head>
<body>
    <div class="layout">
        <header class="header">

                <img src="https://img.icons8.com/color/60/000000/under-construction.png"/>
                <h1>SEÑALAMIENTOS</h1>
                <img src="https://img.icons8.com/color/60/000000/under-construction.png"/>
            
        </header>
        <div class="content">
            <div class="img-display">
                <div class="road-img">
                            {{--Concatenated URL using ID form image and Special URL--}}
                    <img src="{{'https://drive.google.com/uc?id='. $data->img_id_gdrive}}" alt="" >
                </div>  
            </div>
            <div class="road-info">
                <div class="form-info">   
                    <form class="form-group" action="{{route('senalamientos.store', ['id' => $data->id])}}" method="post">

                        @csrf
                        <h2>
                            ¿Existe más de un señalamiento en la Imagen?
                        </h2>
                        <select name="cantidad_senales" id="cantidad_senales"  aria-label="Default select example" required>
                            <option selected disabled value="">Seleccionar</option>
                            <option value = "1">Si</option>
                            <option value = "0">No</option>
                        </select>
                        <h2>Clasificar Señalamiento 
                            <a href="./resources/CATALOGO SEÑALES.pdf" target="_blank">
                                <img id="sign-help" src="https://img.icons8.com/flat-round/24/000000/question-mark.png"/>
                            </a>                        
                        </h2> 
                        <select class="select-clasif" name="simbologia_id" aria-label="Default select example" id="simbologia_id" required>
                            <option selected disabled value="">Seleccionar</option>
                            @foreach($clasificacion as $cls)
                            <option value="{{$cls->id}}" {{(old('clasif_senal') == $cls->id ? 'selected' : '')}}>{{$cls->nombre_clasificacion}}</option>
                            @endforeach 
                        </select>
                        <h2>¿Requiere Mantenimiento?</h2>
                        <select name="mantenimiento_senal" id="mantenimiento_senal"   aria-label="Default select example" required>
                            <option selected disabled value="">Seleccionar</option>
                            <option value = "1">Si</option>
                            <option value = "0">No</option>
                        </select>
                        <input type="submit" value="Guardar">
                    </form>
                </div>

                <!-- Next and previous btns
                <div class="control-panel">
                   {{-- @if($data->id-1 >0)
                        <a href="{{route('calificar.senalamiento', $data->id-1)}}">
                            <button id="previous">Anterior</button>
                        </a>
                    @elseif($data->id-1 <=0)
                        <a href="{{route('calificar.senalamiento', $data->id)}}">
                            <button id="previous">Anterior</button>
                        </a>
                    @endif
                    
                    @if($data->id+1)
                        <a href="{{route('calificar.senalamiento', $data->id+1)}}">
                            <button id="next">Siguiente</button> 
                        </a> 
                    @elseif($data->id+1 == null)
                        <a href="{{route('calificar.senalamiento', $data->id)}}">
                            <button id="next">Siguiente</button> 
                        </a> 
                    @endif
                    --}}
                </div>
                -->

                <div class="home-panel">
                    <a href="{{route('senalamientos.index')}}">
                        <button id = "home-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-door-exit" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M13 12v.01" />
                                <path d="M3 21h18" />
                                <path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5" />
                                <path d="M14 7h7m-3 -3l3 3l-3 3" />
                              </svg>
                              Salir
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <footer class="footer">
            &copy; Armando Ramos Wong 2022 - <a href="https://github.com/Aryo28">Contact</a>
        </footer>
    </div>
</body>
</html>