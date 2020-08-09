<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Digital Experience</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
</head>
<body>
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
            <div>
                <img src="{{ asset('frontend/images/Asset 8@2x.png') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('frontend/images/Asset 10@2x.png') }}" alt="">
               
            </div>
            <div>
                <img src="{{ asset('frontend/images/Asset 9@2x.png') }}" alt="">
            </div>

        </div>
    </div>
    </nav>

   @yield('content')
    
</body>
<script src="{{ asset('frontend/js/app.js') }}"></script>
</html>