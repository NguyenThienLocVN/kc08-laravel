
var outdoors = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoibmd1eWVudGhpZW54dWFubG9jMTIiLCJhIjoiY2tkMXQ2NnI1MGlvMTJybDVoc3hpNm5qZyJ9.rkUNvwFT6U3W2fJ4_M1p0A', {id: 'outdoors-v9', tileSize: 512, zoomOffset: -1 });
var streets = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoibmd1eWVudGhpZW54dWFubG9jMTIiLCJhIjoiY2tkMXQ2NnI1MGlvMTJybDVoc3hpNm5qZyJ9.rkUNvwFT6U3W2fJ4_M1p0A', {id: 'streets-v9', tileSize: 512, zoomOffset: -1 });
var satellite = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoibmd1eWVudGhpZW54dWFubG9jMTIiLCJhIjoiY2tkMXQ2NnI1MGlvMTJybDVoc3hpNm5qZyJ9.rkUNvwFT6U3W2fJ4_M1p0A', {id: 'satellite-streets-v9', tileSize: 512, zoomOffset: -1});
var mymap = L.map('mapid').setView([21.288572, 103.904417], 8); // Son La Province

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/satellite-streets-v9',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoibmd1eWVudGhpZW54dWFubG9jMTIiLCJhIjoiY2tkMXQ2NnI1MGlvMTJybDVoc3hpNm5qZyJ9.rkUNvwFT6U3W2fJ4_M1p0A',
    layer: [outdoors, streets, satellite]
}).addTo(mymap);

var overlays = {};



var bicycleRental = {
    "type": "FeatureCollection",
    "features": [
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.3,
                    21.05
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 51
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.4166667,
                    21.25
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 52
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.15,
                    21.60333333
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 54
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.5138889,
                    21.87222222
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 55
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.3577778,
                    21.20777778
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 57
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    103.4833333,
                    22.41666667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 58
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    103.2333333,
                    22.36666667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 74
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.7,
                    20.85
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 75
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.9,
                    20.33333333
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 76
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.7333333,
                    21.06666667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 77
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    103.2333333,
                    22.36666667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 78
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.15,
                    21.13333333
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 79
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.6333333,
                    21.26666667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 80
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.7333333,
                    21.13333333
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 81
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.7805556,
                    20.84166667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 82
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    104.8166667,
                    20.8
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 83
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    103.15,
                    22.06666667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 84
        },
        {
            "geometry": {
                "type": "Point",
                "coordinates": [
                    105.0666667,
                    20.76666667
                ]
            },
            "type": "Feature",
            "properties": {
                "popupContent": "This is a B-Cycle Station. Come pick up a bike and pay by the hour. What a deal!"
            },
            "id": 85
        }
    ]
};

var geojsonMarkerOptions = {
    radius: 8,
    fillColor: "#ff7800",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
};

// Click to show popup
function onEachFeature(feature, layer) {
    if (feature.properties && feature.properties.popupContent) {
        layer.bindPopup(feature.properties.popupContent);
    }
}

// Draw circle each point
var myLayer = L.geoJSON(bicycleRental, {
    onEachFeature: onEachFeature,
    pointToLayer: function (feature, latlng) {
        return L.circleMarker(latlng, geojsonMarkerOptions);
    }
}).addTo(mymap);

// Select option change map layer
var legend = L.control({position: 'topright'});
legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend');
    div.innerHTML = '<select id="select-baseMap"><option value="satellite">Vệ tinh</option><option value="outdoors">Ngoài trời</option><option value="streets">Đường phố</option></select>';
    div.firstChild.onmousedown = div.firstChild.ondblclick = L.DomEvent.stopPropagation;
    return div;
};
legend.addTo(mymap);

$('#select-baseMap').on('change', function(){
    if($(this).val() == 'outdoors') {
        mymap.removeLayer(streets);
        mymap.removeLayer(satellite);
        mymap.addLayer(outdoors);
    }
    else if($(this).val() == 'streets') { 
        mymap.removeLayer(outdoors);
        mymap.removeLayer(satellite);
        mymap.addLayer(streets);
    }
    else { 
        mymap.removeLayer(streets);
        mymap.removeLayer(outdoors);
        mymap.addLayer(satellite);
    } 
});

