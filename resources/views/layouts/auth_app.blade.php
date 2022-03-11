<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('partials.head')

</head>
<body>
@yield('content')

@include('partials.foot')
</body>
</html>
