<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dieu a parle — Login</title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
{{--    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">--}}
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>

<body class="layout-centered bg-img" style="background-image: url({{ asset('img/bg/bg3.jpg') }})">
