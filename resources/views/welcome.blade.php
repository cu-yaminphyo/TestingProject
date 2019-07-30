
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MM Movie</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: aqua;
                color: blue;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: blue;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
          
       
            <div class="content">
                    <div class="title m-b-md">
                   Welcome My Admin 
                    </div>
            </div>
            
        <div class="flex-center position-ref full-height">
              
           
            @if (Route::has('login'))
            <div class="links">
                @auth
              
               
                    <a href="{{ route('backend.index') }}"><h3>ပြန်လည်ပြုပြင်ရန်</h3></a>
                @else
                    <a href="{{ route('login') }}"><b><h2>Login</h2></b></a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"><b><h2>Register</b></h2></a>
                    @endif
                @endauth
            </div>
        @endif
               
           

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
            
        </div>
      
    </body>
</html>
