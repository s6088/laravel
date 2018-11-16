<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'csejnubeta') }}</title>

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ashik.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    @yield('content1')

    <!-- Scripts -->

    <script>
        CKEDITOR.replace( 'article-ckeditor' );
</script>
<script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/new.js') }}"></script>
    <script src="{{ asset('js/sadman.js') }}"></script>
</script>



</body>
</html>
