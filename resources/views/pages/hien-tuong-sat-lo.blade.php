@include('layouts.head')

<body>
    @include('layouts.header')

    <main>
        <div class="container">
            <div class="content">
                <div id="mapid"></div>
                <div id="basemaps-wrapper" class="leaflet-bar">
                    <select id="basemaps">
                        <option value="Imagery">Bản đồ vệ tinh</option>
                        <option value="Topographic">Bản đồ địa hình</option>
                        <option value="Streets">Bản đồ đường</option>
                        <option value="NationalGeographic">Bản đồ địa lý</option>
                        <option value="Oceans">Bản đồ đại dương</option>
                        <option value="Gray">Bản đồ xám</option>
                        <option value="ShadedRelief">Bản đồ bóng</option>
                    </select>
                </div>
            </div>
        </div>
    </main>

    <!-- Include map js -->
    <script src="{{ asset('js/map-leaflet.js') }}"></script>
    
</body>