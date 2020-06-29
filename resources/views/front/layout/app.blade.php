<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Beauty Parlour</title>

    @include('front.partials.styles')

    @stack('styles')
</head>
<body>

@include('front.partials.header')

@yield('content')

<!--Load Footer-->
@include('front.partials.footer')

<!--Load Scripts-->
@include('front.partials.scripts')

@stack('scripts')

</body>
</html>
