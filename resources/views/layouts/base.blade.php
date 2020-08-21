<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>

    <div class="container">
        @include('layouts.header')

        <main>
            <div class="wrap">
                @include('layouts.navigation')
                @yield('content')
            </div>
        </main>

        @include('layouts.footer')
    </div>

    <!-- Include js -->
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
