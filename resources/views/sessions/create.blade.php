<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--CSS-->
    <link rel="stylesheet" href="{{  url('css/custom.css') }}">

    <title>Log In</title>
</head>
<body>
    <div class="layout">

        <header class="header">

                <img src="https://img.icons8.com/color/60/000000/under-construction.png"/>
                <h1>SEÑALAMIENTOS</h1>
                <img src="https://img.icons8.com/color/60/000000/under-construction.png"/>
            
        </header>

        <div class="content">
            <div class="login-form">
                <form class="form-group" action="/sessions" method="post">

                    @csrf

                    <h2>Usuario:</h2>
                    <input type="email" name="email">
                    <h2>Contraseña:</h2> 
                    <input type="password" name="password">
                    <input type="submit" value="Enviar" id="saveLogin">

                </form>
            </div>
        </div>
        
    </div>


</body>
</html>