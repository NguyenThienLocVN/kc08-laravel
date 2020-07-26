@include('layouts.head')

<body>
    @include('layouts.header')

    <main>
        <div class="container">
            <div class="content">
                <div id="mapid"></div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    <!-- Include map js -->
    <script src="{{ asset('js/map-leaflet.js') }}"></script>
    
</body>