<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Styles -->
        <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


            .click > a {
                color: #000000;
                padding: 25px;
                font-size:50px;
                font-size:50px;
                margin-inline: auto;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="flex-center  full-height">
            @if (Route::has('login'))
                <div class="click">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">cadastrar usuario</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    </body>
</html>
