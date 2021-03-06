<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=icon href=/img/check.png sizes="16x16" type="image/png">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
 
    <title>CRUD com Laravel 8 e Vue JS 3</title>
 
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <style>
        .bg-light {
            background-color: #eae9e9 !important;
        }

        .btn{
            border-radius:5px;
        }
    </style>
</head>
<body>
<div id="app"></div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>