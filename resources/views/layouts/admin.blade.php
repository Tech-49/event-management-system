<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet" />
   

</head>
<body>
     <div class="wrapper">
       @include('admin.elements.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('admin.elements.nav')
            <!-- End Navbar -->
            <div class="content">
                <div class="container">
                    <div class='row'>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                 </div>
            </div>
            
        </div>
    </div>
    
    
</body>
</html>
