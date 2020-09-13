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

        <main>
            <div id="btn-toggle-map" class="btn-show-map">
                <i class="fa fa-chevron-left"></i>
            </div>
            <div class="map-control">
                <a href="{{route('trang-chu')}}" class="btn-home"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp; <span>TRANG CHỦ</span> </a>
                <div class="header">
                    <h4>BẢN ĐỒ</h4>
                    <h4>HIỆN TRẠNG SẠT LỞ BỜ SÔNG</h4>
                </div>
                <div class="panel">
                    <div class="tbl-header landslide-header m-1">
                        <table cellpadding="0" cellspacing="0" border="1" class="font-13 w-100">
                            <thead>
                                <tr>
                                    <th class="text-center font-weight-bold">STT</th>
                                    <th class="text-center font-weight-bold">ĐỊA DANH</th>
                                    <th class="text-center font-weight-bold">DÀI (m)</th>
                                    <th class="text-center font-weight-bold">GHI CHÚ</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="landslide-body">
                        <table class="font-13 w-100">
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($landSlideLocations as $location)
                                    <tr class="location-item" id="{{$location->latitude.'-'.$location->longitude}}">
                                        <td class="text-center">{{ $i }}</td>
                                        <td class="p-1">{{ $location->name }}</td>
                                        <td class="text-center">{{ $location->length }}</td>
                                        <td class="p-1">{{ $location->note }}</td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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

            <div class="note font-13">
                <h5 class="font-weight-bold font-13">CHÚ THÍCH</h5>
                <ul>
                    <li class="note-item"><span class="note-blue position-relative" style="background: #007bff;"></span>&nbsp; Sạt lở bình thường</li>
                    <li class="note-item"><span class="note-yellow position-relative" style="background: yellow;"></span>&nbsp; Sạt lở nguy hiểm</li>
                    <li class="note-item"><span class="note-red position-relative" style="background: red;"></span>&nbsp; Sạt lở rất nguy hiểm</li>
                </ul>
            </div>

            <textarea id="normalJson" class="display-none">{!! $normalJson !!}</textarea>
            <textarea id="dangerJson" class="display-none">{!! $dangerJson !!}</textarea>
            <textarea id="veryDangerJson" class="display-none">{!! $veryDangerJson !!}</textarea>

            <textarea id="normalLineJson" class="display-none">{!! $normalLineJson !!}</textarea>
            <textarea id="dangerLineJson" class="display-none">{!! $dangerLineJson !!}</textarea>
            <textarea id="veryDangerLineJson" class="display-none">{!! $veryDangerLineJson !!}</textarea>
            
        </main>

    <!-- Include map js -->
    <script src="{{ asset('js/map-leaflet.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>