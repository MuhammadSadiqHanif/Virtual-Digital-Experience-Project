<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Digital Experience</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"
        integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ=="
        crossorigin="anonymous"></script>

    <script src="{{ asset('frontend/js/jquery-3.5.1.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome/css/font-awesome.css') }}">
    <link href="{{ optional($settings)->font_family }}" rel="stylesheet">

    <style>
        html *
        {
            {!! optional($settings)->font_family_css !!}
        }
    </style>
</head>

<body>
     <nav>
        <div class="navbar">
            <div class="logo">
                <div class="logoImg">
                    <img src="{{ asset('clients/logos/'.$settings->logo) }}" alt="">
                </div>
               
            </div>
            <div class="icons">

                <div class="hide">
                    <i style="font-size:30px; color: #043673;" class="fa fa-question-circle-o" aria-hidden="true"></i>
                </div>

                <div onclick="dropDownToggle()">
                    <i style="font-size:30px; color: #043673;" class="fa fa-bars"></i>
                    <div id="drop" class="dropDown">
                        <div>
                            <p>ACTION</p>
                        </div>
                        <div>
                            <p>VISIT</p>
                        </div>
                        @guest
                        <div>
                            <a href="{{ route('login') }}" style="text-decoration: none;color:black;"><p>Login</p></a>
                        </div>
                        @else
                        <div>
                            <a href="{{ route('login') }}" style="text-decoration: none;color:black;"><p>Dashboard</p></a>
                        </div>
                        @endguest

                    </div>
                </div>

            </div>
        </div>
    </nav>

   @yield('content')
    
</body>
<script src="{{ asset('frontend/js/app.js') }}"></script>
</html>