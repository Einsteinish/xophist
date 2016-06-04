<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Xophist App</title>
    <meta name="description" content="Xophist apps">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="{{ load_asset('css/main.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')
    @include('layouts.partials.profile')
    <div class="container">
        @yield('content')
    </div>
    <br>
    <br>
    <br>
    <hr>
    <footer class="footer">
        <div class="container text-center">
        <p class="pull-left">© 2016 Xophist. All Rights Reserved</p>
        <p class="pull-right"> xophist@aol.com</p>
        <!--
        <ul class="pull-right list-inline">
            <li>
                <a href="https://github.com/xophist/xophist-laravel.git">GitHub Project</a>
            </li>
        </ul>
        -->
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
