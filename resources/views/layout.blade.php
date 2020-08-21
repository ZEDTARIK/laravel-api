<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link  href="{{ mix('/css/app.css')}}" rel="stylesheet">
        <link  href="{{ mix('/css/theme.css')}}" rel="stylesheet">
        <title>Laravel</title>
</head>
<body>
    
    <div class="container">
        <div class="row my-2">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                      <a class="navbar-brand" href="{{ route('employee.index')}}">Laravel</a>

                        <div class="collapse navbar-collapse" id="navbarColor02">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                <a class="nav-link" href="{{ route('employee.index')}}">Employee <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Users</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            </div>
        </div>
        <!-- Content Dynamic-->
        <div class="row my-2">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ mix('/js/app.js')}}"></script>
    
</body>
</html>