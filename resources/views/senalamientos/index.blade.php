<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.7/css/scroller.bootstrap5.min.css">
    <link rel="stylesheet" href="{{  url('css/custom.css') }}">

    <!--JS-->
    

    <title>Señalamientos 2022</title>
</head>
<body>
    <div class="layout-table">
        <header class="header">
             
                <img src="https://img.icons8.com/color/60/000000/under-construction.png"/>
                <h1>SEÑALAMIENTOS</h1>
                <img src="https://img.icons8.com/color/60/000000/under-construction.png"/>

        </header>
        <div class="content-images">
            <div class="container-table fluid">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-dark dt-responsive nowrap" id="table-img">
                            <thead> <!-- Thead-->
                                <th scope="col" id="theader">#</th>
                                <th scope="col" id="theader">Imagen</th>
                                <th scope="col">Estatus</th>
                                <th scope="col">Acción</th>
                            </thead>
                            <tbody> <!-- TBody-->
                                @foreach($images as $img)
                                <tr>    <!-- Image ID-->
                                    <td id= "col1">{{$img->id}}</td>
                                         <!-- Image Link-->
                                    <td id= "col2">
                                        <a href="{{$img->img_url}}" target="_blank">
                                            <button class="btn btn-info" style="margin: 5px">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <line x1="15" y1="8" x2="15.01" y2="8" />
                                                    <rect x="4" y="4" width="16" height="16" rx="3" />
                                                    <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                                    <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                                                  </svg>
                                                 <strong>Abrir</strong>
                                            </button>
                                        </a>
                                    </td>
                                         <!-- Image Status-->
                                    <td id= "col3">
                                        @if( $img->img_status == 1)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="20" height="20" viewBox="0 0 24 24" stroke-width="3" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="4" />
                                          </svg>
                                          Sin Clasficar
                                        @elseif( $img->img_status == 0)
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-point" width="20" height="20" viewBox="0 0 24 24" stroke-width="3" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <circle cx="12" cy="12" r="4" />
                                            </svg>
                                            Clasificado
                                        @endif
                                    </td>
                                        <!-- Image Action-->
                                    <td id= "col4">
                                        @if( $img->img_status == 0)
                                            <form class="form-group" action="{{route('senalamientos.edit',$img)}}" method="get">
                                                <button type="submit" class="btn btn-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                                    </svg>
                                                    <strong>Editar</strong>
                                                </button>
                                            </form>
                                        @elseif( $img->img_status == 1)
                                        <form class="form-group" action="{{route('calificar.senalamiento', $img)}}" method="get">
                                                <button type="submit"  class="btn btn-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <circle cx="12" cy="7" r="4" />
                                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
                                                        <circle cx="16.5" cy="17.5" r="2.5" />
                                                        <path d="M18.5 19.5l2.5 2.5" />
                                                    </svg>
                                                    <strong>Clasificar</strong>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <div class="session-control">
        <form action="/logout" method="post">
                @csrf
             <input class="logout-btn" type="submit" value="Salir">
        </form>
        
    </div>
    <footer class="footer">
        &copy; Armando Ramos Wong 2022 - <a href="https://github.com/Aryo28">Contact</a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/scroller/2.0.7/js/dataTables.scroller.min.js"></script>
    <script>    
        $(document).ready(function () {
            $('#table-img').DataTable(
                {
                    "language": {
                        "lengthMenu": "Mostrar " + 
                        `
                            <select id="dt-select">
                                <option value='10'>10</option> 
                                <option value='25'>25</option> 
                                <option value='50'>50</option> 
                                <option value='100'>100</option> 
                                <option value='-1'>Todos</option>   
                            </select>
                        `
                        +" Entradas",
                        "zeroRecords": "No se encontraron datos",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "Sin información disponible",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }
                    }
                },
                {
                }
            );
        });
    </script>

</body>
</html>