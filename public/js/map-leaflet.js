var pc = true;

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  pc = false;
}

var mymap = L.map("mapid", {
    center: [10.952256, 106.687864],
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
  // Load all normal level location 
  var normalLocations = JSON.parse(document.getElementById('normalJson').value);

  // Load all danger level location 
  var dangerLocations = JSON.parse(document.getElementById('dangerJson').value);

  // Load all very-danger level location 
  var veryDangerLocations = JSON.parse(document.getElementById('veryDangerJson').value);
}

// Click to show popup
function onEachFeature(feature, layer) {
  if (feature.properties && feature.properties.popupContent) {
      layer.bindPopup(feature.properties.popupContent);
      layer.on('mouseover', function() { layer.openPopup(); });
      layer.on('mouseout', function() { layer.closePopup(); });
  }
}

// Define color for normal level marker
var normalLevelColor = {
  radius: 7,
  fillColor: "#007bff",
  color: "#000",
  weight: 1,
  opacity: 1,
  fillOpacity: 0.8,
  className: 'normalMarker'
};
// Draw circle each point
var myLayer = L.geoJSON(normalLocations, {
  onEachFeature: onEachFeature,
  pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, normalLevelColor);
  }
}).addTo(mymap);

// Define color for danger level marker
var dangerLevelColor = {
  radius: 7,
  fillColor: "yellow",
  color: "#000",
  weight: 1,
  opacity: 1,
  fillOpacity: 0.8,
  className: 'dangerMarker'
};
// Draw circle each point
var myLayer = L.geoJSON(dangerLocations, {
  onEachFeature: onEachFeature,
  pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, dangerLevelColor);
  }
}).addTo(mymap);

// Define color for very-danger level marker
var veryDangerLevelColor = {
  radius: 7,
  fillColor: "red",
  color: "#000",
  weight: 1,
  opacity: 1,
  fillOpacity: 0.8,
  className: 'veryDangerMarker'
};
// Draw circle each point
var myLayer = L.geoJSON(veryDangerLocations, {
  onEachFeature: onEachFeature,
  pointToLayer: function (feature, latlng) {
      return L.circleMarker(latlng, veryDangerLevelColor);
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

// Checkbox to show/hide normal marker
$('#normal-checkbox').change(function () {
  if (!this.checked) 
     $('.normalMarker').fadeOut('slow');
  else 
      $('.normalMarker').fadeIn('slow');
});

// Checkbox to show/hide danger marker
$('#danger-checkbox').change(function () {
  if (!this.checked) 
     $('.dangerMarker').fadeOut('slow');
  else 
      $('.dangerMarker').fadeIn('slow');
});

// Checkbox to show/hide very danger marker
$('#very-danger-checkbox').change(function () {
  if (!this.checked) 
     $('.veryDangerMarker').fadeOut('slow');
  else 
      $('.veryDangerMarker').fadeIn('slow');
});