
<title>@yield('title')</title>

{{-- <link rel="shortcut icon" type="{{ asset('image/png')}}" href="images/favicon.png">
<link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet')}}">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('vendor/nouislider/nouislider.min.css')}}"> --}}
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
@if (app()->getlocale() == 'ar')  
<link href="{{URL::asset('vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'cairo', sans-serif !important;
        }
        </style>
        
        @else
        <link href="{{URL::asset('vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
            
        @endif