
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Sicoacfi</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" >


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{url('css/dashboard.css')}}" rel="stylesheet">
</head>
<body>
@include('component.navbar')


<div class="container-fluid">
    <div class="row">
        @include('component.sidebar')
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
            <div class=" align-items-center pt-3 pb-2 mb-3 border-top border-bottom">
                @yield('content')
            </div>
        </div>
    </div>
</div>



<script src="{{ url('js/bootstrap.js')}}"></script>

<script src="{{url('js/feather.js')}}"></script>

<script src="{{url('js/Chart.min.js')}}"></script>

{{--<script src="{{url('js/dashboard.js')}}"></script>--}}
</body>
</html>
