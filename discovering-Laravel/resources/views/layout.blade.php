<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    add bootstrap link--}}
    <title>Laravel</title>
</head>
<body class="antialiased">

@include('components/header')

@section('content')
@show

@include('components/footer')

</body>
</html>
