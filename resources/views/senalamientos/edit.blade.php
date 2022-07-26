<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="{{  url('css/custom.css') }}">

    <title>Document</title>
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
                    <img src="{{'https://drive.google.com/uc?id='. $senalamiento->img_id_gdrive}}" alt="" >
                </div>  
            </div>
            <div class="road-info">
                <div class="form-info">   
                    <form class="form-group" action="{{route('senalamientos.update', $data)}}" method="post">

                        @csrf
                        @method('put')
                        
                        <h2>Clasificar Señalamiento 
                            <a href="{{url('assets\pdf\CATALOGO SEÑALES.pdf')}}" target="_blank">
                                <img id="sign-help" src="https://img.icons8.com/flat-round/24/000000/question-mark.png"/>
                            </a>                        
                        </h2> 
                        <select class="select-clasif" name="simbologia_id" aria-label="Default select example" id="simbologia_id" required>
                            <option selected disabled value="">Seleccionar</option>
                            @foreach($clasificacion as $cls)
                                <option value="{{$cls->id}}" {{(old('simbologia_id',$data->simbologia_id) == $cls->id ? 'selected' : '')}}>{{$cls->nombre_clasificacion}}</option>
                            @endforeach 
                        </select>
                        <h2>¿Requiere Mantenimiento?</h2>
                        <select name="mantenimiento_senal" id="mantenimiento_senal"   aria-label="Default select example" required>
                            <option selected disabled value="">Seleccionar</option>
                            <option value = "1" {{(old('mantenimiento_senal',$data->mantenimiento_senal) =='1' ? 'selected =': '')}}>Si</option>
                            <option value = "0"{{(old('mantenimiento_senal',$data->mantenimiento_senal) =='0' ? 'selected =': '')}}>No</option>
                        </select>
                        <input type="submit" value="Guardar">
                    </form>
                </div>
                
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