<!DOCTYPE html>
<html>

<head>
        <title>404 Not Found </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('errors_pages/404/maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('errors_pages/404/assets/css/style.css')}}">

        <!-- JQUERY LIBRARY LINKS -->
        <script src="{{ asset('errors_pages/404/code.jquery.com/jquery-1.9.1.js')}}"></script>
        <script src="{{ asset('errors_pages/404/code.jquery.com/jquery-migrate-1.2.1.min.js') }}"></script>
    </head>

    <body>
        <div class="container">
            <div class="col-md-6 col-sm-6 imgSec">
                <div class="icon">
                    <div class="victor"></div>
                    <div class="animation"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 content">
                <h2 class="heading">OOPS!</h2>
                <p>I THINK I AM LOST</p>
                <p><small>Sorry, we can't find the page you're looking for. While we look into it..</small></p>
                <a href="{{ url('/') }}" class="button"> Back to home</a>
            </div>
        </div>
    </body>

</html> 