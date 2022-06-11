<!DOCTYPE html>
{{-- <html lang="{{ LaravelLocalization::getCurrentLocaleDirection() }}"> --}}
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

 
    @include('admin.layouts.head')

</head>

<body>

  
        @include('admin.layouts.main-header')

        
        @include('admin.layouts.main-sidebar')
		   @yield('content')
      
        @include('admin.layouts.footer')
        
    @include('admin.layouts.footer-scripts')
</body>

</html>



