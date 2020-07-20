<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')
    <!-- Include js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>