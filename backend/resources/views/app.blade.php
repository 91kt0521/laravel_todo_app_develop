<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header-component></header-component>

    <router-view></router-view>
</div>

<h1 id="test">aaaaa</h1>
<!-- Scripts -->
<script>
document.getElementById("test").textContent = '変更します'
</script>
<script src="{{ asset('/js/app.js') }}" defer></script>
</body>
</html>
