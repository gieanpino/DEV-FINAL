<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
               
            }
            .card{
                border:#AEB6BF 3px solid;
                height:300px;
                font-size:20px;
                width:80%;
                text-align: center;
                margin: 10%;
            }
            a:hover { color: white;
                 font-family: arial;
                  text-decoration: none ;
                  background-color: #0D6EFD;
                }
            a{ color: white;
                 font-family: arial;
                  text-decoration: none ;
                  background-color: #0D6EFD;
                  padding:15px  100px ;
                  margin-top: 70px;
            }
            .nav-link{
            color:white;
            }
            .card-text{
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body class="antialiased">
       <div class="content">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Bienvenidos al</h2>
                    <p class="card-text ">APP SG-SST (Sistema de gestión de seguridad y salud en el trabajo)</p>
                    @if (Route::has('login'))
                                    <div class="">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        @else
                                        
                                            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesion</a>
                                            @if (Route::has('register'))
                                                <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> -->
                                            @endif
                                        @endauth
                                    </div>
                    @endif

                </div>

            </div>
         </div>     
       </div>
    </body>
</html>
