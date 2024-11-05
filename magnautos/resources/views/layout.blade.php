<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')

<body>

<div class="wrap">
    @include('components.menu')
</div>

@yield('content')

@include('components.footer')
</body>
</html>
