<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
{{-- <style type=text/css> @yield('css') </style> --}}
</head>
<body>
@include('clients.blocks.header')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <aside>
                        @section('sidebar')
                        @include('clients.blocks.sidebar')
                        @show
                    </aside>
                </div>
                <div class="col-8">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        
       
    </main>
    @include('clients.blocks.footer')
    <script src="{{asset('assets/clients/css/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/clients/css/custom.js')}}"></script>
        @yield('js')
        @stack('scripts')
</body>
</html>
