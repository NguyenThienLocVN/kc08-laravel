@section('title', 'Hiện trạng sạt lở 2020 | Chương trình KC.08/16-20')
@push('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    <script src="https://unpkg.com/esri-leaflet@2.4.1/dist/esri-leaflet.js"
    integrity="sha512-xY2smLIHKirD03vHKDJ2u4pqeHA7OQZZ27EjtqmuhDguxiUvdsOuXMwkg16PQrm9cgTmXtoxA6kwr8KBy3cdcw=="
    crossorigin=""></script>
    <script src="{{ asset('js/leaflet-kml/L.KML.js') }}"></script>
@endpush
@include('layouts.head')

<body>
    @include('layouts.header')

    <main>
        <div class="container">
            <div id="btn-toggle-map" class="btn-show-map">
                <i class="fa fa-chevron-left"></i>
            </div>
            <div class="map-control">
                <div class="header">
                    <h4>BẢN ĐỒ</h4>
                    <h4>HIỆN TRẠNG SẠT LỞ BỜ SÔNG</h4>
                </div>
            </div>
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
    </main>

    <!-- Include map js -->
    <script src="{{ asset('js/map-leaflet.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>    
</body>