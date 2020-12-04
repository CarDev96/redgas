<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') . '/favicon.ico' }}">
	<title>{{ env('APP_NAME')  }}</title>
    {{ Html::style('css/landing.css') }}
</head>
<body>
    @include('homepage.navbar')
    @include('homepage.about-us')
	@include('homepage.red-card')
    @include('homepage.about-info')
    @include('homepage.billing')
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/jquery.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.velocity.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/scroll-reveal.js')}}"></script>
</html>
