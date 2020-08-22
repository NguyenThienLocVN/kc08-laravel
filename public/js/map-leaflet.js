var pc = true;

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  pc = false;
}

var mymap = L.map("mapid", {
    center: [10.765933, 106.654556],
    zoom: 10,
    dragging: pc,
    tap: pc,
    zoomControl: true
});
mymap.zoomControl.setPosition('bottomright');

const mapEl = document.querySelector("#mapid");
// Binds event listeners for the map and calls the function
mapEl.addEventListener("touchstart", onTwoFingerDrag);
mapEl.addEventListener("touchend", onTwoFingerDrag);
  
  
function onTwoFingerDrag (e) {
    if (e.type === 'touchstart' && e.touches.length === 1) {
      e.currentTarget.classList.add('swiping')
    } else {
      e.currentTarget.classList.remove('swiping')
    }
}

var currentURL = document.URL.substr(document.URL.length - 4, document.URL.length);
if(currentURL == '2020')
{
  var bicycleRental = JSON.parse(document.getElementById('normalJson').value);
}



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
      layer.on('mouseover', function() { layer.openPopup(); });
      layer.on('mouseout', function() { layer.closePopup(); });
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
var layer = L.esri.basemapLayer('Imagery').addTo(mymap);
var layerLabels;
layerLabels = L.esri.basemapLayer('Imagery' + 'Labels');
mymap.addLayer(layerLabels);

function setBasemap (basemap) {
    if (layer) {
        mymap.removeLayer(layer);
    }

    layer = L.esri.basemapLayer(basemap);

    mymap.addLayer(layer);

    if (layerLabels) {
        mymap.removeLayer(layerLabels);
    }

    if (basemap === 'ShadedRelief'
    || basemap === 'Oceans'
    || basemap === 'Gray'
    || basemap === 'Imagery'
    ) {
        layerLabels = L.esri.basemapLayer(basemap + 'Labels');
        mymap.addLayer(layerLabels);
    } else if (basemap.includes('Imagery')) {
        layerLabels = L.esri.basemapLayer('ImageryLabels');
        mymap.addLayer(layerLabels);
    }
}

document.querySelector('#basemaps').addEventListener('change', function (e) {
    var basemap = e.target.value;
    setBasemap(basemap);
});