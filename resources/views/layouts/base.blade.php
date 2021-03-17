<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>

    <div class="container p-0">
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

    
</body>
</html>
