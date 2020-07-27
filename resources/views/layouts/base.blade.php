<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')

    <main>
        <div class="container">
            <div class="content">
                @include('layouts.sidebar')

                <div class="content-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    <!-- Include js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>