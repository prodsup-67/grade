<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <div class="container mx-auto px-4">
        <header class="mt-3">
            @include('includes.header')
        </header>
        <div id="main">
            @yield('content')
        </div>
        <footer class="">
            @include('includes.footer')
        </footer>
    </div>
</body>

</html>
