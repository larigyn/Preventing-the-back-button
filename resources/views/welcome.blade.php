<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larigyn</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        {{-- <a href="{{ route('register') }}">Register</a> --}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Larigyn
                </div>
               {{-- <div class="well well-sm">                   
                   <button class="btn btn-primary" type="button">
                     Login using  <span class="badge">name / email</span>
                    </button>
                    <button class="btn btn-primary" type="button">
                     Preventing the back button to view  <span class="badge">cache page</span>
                    </button>
                    <button class="btn btn-primary" type="button">
                     Implementing the global declaration on  <span class="badge">ucwords</span>
                    </button>
               </div> --}}
              
                  <!--  <div class="panel panel-default">
                       <div class="panel-heading">
                           <h3 class="panel-title">Panel title</h3>
                       </div>
                       <div class="panel-body">
                           <h3>Panel content</h3>
                       </div>
                   </div> -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="https://sujipthapa.co/blog/laravel-v55-login-register-with-username-or-email" target="_blank">
                            <button class="btn btn-primary" type="button">
                            Login using <span class="badge">name / email</span>
                            </button>
                        </a>
                        <br>
                        <span class="label label-default">class LoginController extends Controller</span>
                        <span class="label label-default">protected function credentials</span>
                        <span class="label label-default">use Illuminate\Http\Request</span>                    
                        
                    </li>
                    
                    <li class="list-group-item">
                        <a href="https://stackoverflow.com/questions/30118998/prevent-browsers-back-button-login-after-logout-in-laravel-5#" target="_blank">
                            <button class="btn btn-primary" type="button">
                            Preventing the back button to view  <span class="badge">cache page</span>
                            </button>
                        </a>
                    <br>
                        <span class="label label-default">php artisan make:middleware PreventBackHistory</span>
                        <span class="label label-default">public function handle</span>
                        <span class="label label-default">kernel.php</span>  

                    </li>
                    <li class="list-group-item">
                        <a href="https://stackoverflow.com/questions/32489324/how-to-capitalize-first-letter-in-laravel-blade" target="_blank">
                            <button class="btn btn-primary" type="button">
                             Implementing the global declaration on  <span class="badge">ucwords</span>
                            </button>
                        </a>
                        <br>
                        <span class="label label-default">app/Providers/AppServiceProvider's boot() function</span>
                        <span class="label label-default">@lang_u(Auth::user()->name)</span>
                        {{-- <span class="label label-default">kernel.php</span>   --}}


                </li>
                    <li class="list-group-item"><button class="btn btn-primary" type="button">
                     more  <span class="badge">info</span>
                    </button></li>
                    <li class="list-group-item"><button class="btn btn-primary" type="button">
                     more  <span class="badge">info</span>
                    </button></li>
                </ul>  
                    
                       
             {{--    <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
               
            </div>
        </div>
    </body>
</html>
