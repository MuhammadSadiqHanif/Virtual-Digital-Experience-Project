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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body onunload = "console.log('goodBye');">
    <nav>
        <div class="navbar">
            <div class="logo">
                <div class="logoImg">
                    <img src="{{ asset('frontend/images/Asset 14@2x.png') }}" alt="">
                </div>
                <div class="logoTxt">
                    <img src="{{ asset('frontend/images/Asset 12@2x.png') }}" alt="">
                </div>
            </div>
            <div class="icons">

                <div class="hide">
                    <img src="{{ asset('frontend/images/Asset 10@2x.png') }}" alt="">

                </div>
                <div onclick="dropDownToggle()">
                    <img src="{{ asset('frontend/images/Asset 9@2x.png') }}" alt="">
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
                            <a href="{{ route('login') }}"><p>Dashboard</p></a>
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