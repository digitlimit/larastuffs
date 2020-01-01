<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{larastuffs_asset('css/shared.css')}}">
    <title>Adminpanel</title>
</head>
<body>

<div id="app"></div>

<script src="{{larastuffs_asset('js/shared.js')}}"></script>
<script src="{{larastuffs_asset('js/app.js')}}"></script>
</body>
</html>