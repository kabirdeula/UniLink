{{-- Meta Tags --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

{{-- CSRF Token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- CSS --}}
{{--  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">  --}}
{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}"> --}}

{{-- Font Awesome Icons --}}
{{-- <script src="https://kit.fontawesome.com/9baadc10e3.js" crossorigin="anonymous"></script> --}}


{{-- Google Fonts --}}
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
