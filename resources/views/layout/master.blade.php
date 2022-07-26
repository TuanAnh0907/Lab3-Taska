<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The News</title>

    @vite('resources/css/app.css')

    <!-- <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

    @include('layout.style')

    @stack('style')

</head>

<body>

    @include('layout.header')

        @yield('content')

    @include('layout.footer')

    @include('layout.script')

    @stack('script')

    <!-- <script src="{{ asset('js/app.js') }}" defer> -->

    </script>
</body>

</html>
