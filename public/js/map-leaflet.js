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
mymap.zoomControl.setPosition('bottomleft');

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

  // Load line 
  var normalLineLocations = JSON.parse(document.getElementById('normalLineJson').value);
  var dangerLineLocations = JSON.parse(document.getElementById('dangerLineJson').value);
  var veryDangerLineLocations = JSON.parse(document.getElementById('veryDangerLineJson').value);
}


// Click to show popup
function onEachFeature(feature, layer) {
  if (feature.properties && feature.properties.hoverContent) {
      layer.on('click', function() { layer.bindPopup(feature.properties.detailContent, {closeOnClick: true, autoClose: false}).openPopup()});
      layer.on('mouseover', function() { layer.bindPopup(feature.properties.hoverContent).openPopup()});
  }
}

// Draw line
var normalLine = normalLineLocations;

var normalColor = {
  color: "#007bff",
  weight: 4,
  opacity: 1,
  className: "normal-line"
};

L.geoJSON(normalLine, {
  style: normalColor
}).addTo(mymap);

// Draw line
var dangerLine = dangerLineLocations;

var dangerColor = {
  color: "yellow",
  weight: 4,
  opacity: 1,
  className: "danger-line"
};

L.geoJSON(dangerLine, {
  style: dangerColor
}).addTo(mymap);

// Draw line
var veryDangerLine = veryDangerLineLocations;

var veryDangerColor = {
  color: "red",
  weight: 4,
  opacity: 1,
  className: "very-danger-line"
};

L.geoJSON(veryDangerLine, {
  style: veryDangerColor
}).addTo(mymap);

// Define color for normal level marker
var normalLevelColor = {
  radius: 7,
  fillColor: "#007bff",
  color: "#007bff",
  weight: 1,
  opacity: 1,
  fillOpacity: 1,
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
  color: "yellow",
  weight: 1,
  opacity: 1,
  fillOpacity: 1,
  className: 'dangerMarker',
  zIndexOffset : 999
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
  color: "red",
  weight: 1,
  opacity: 1,
  fillOpacity: 1,
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

// Add map legend
var legend = L.control({position: 'topright'});
    legend.onAdd = function (mymap) {

    var div = L.DomUtil.create('div', 'info-legend');
    labels = ['<strong>Chú thích</strong>'],
    categories = ['Sạt lở bình thường','Sạt lở nguy hiểm','Sạt lở rất nguy hiểm'];
    colors = ['blue', 'yellow', 'red'];

    div.innerHTML += "<ul>";
    div.innerHTML += "<li class='d-flex mb-2 align-items-center'><input type='checkbox' id='normal-checkbox' checked>&nbsp;<span class='font-weight-bold'>Bình thường</span> </li>";
    div.innerHTML += "<li class='d-flex mb-2 align-items-center'><input type='checkbox' id='danger-checkbox' checked>&nbsp;<span class='font-weight-bold'>Nguy hiểm</span> </li>";
    div.innerHTML += "<li class='d-flex mb-2 align-items-center'><input type='checkbox' id='very-danger-checkbox' checked>&nbsp;<span class='font-weight-bold'>Rất nguy hiểm</span> </li>";
    div.innerHTML += "</ul>";
    return div;
};
legend.addTo(mymap);

    
// Checkbox to show/hide normal marker
$('#normal-checkbox').change(function () {
  if (!this.checked) {
    $('.normalMarker').fadeOut('normal');
    $('.normal-line').fadeOut('normal');
  }
  else 
  {
    $('.normalMarker').fadeIn('normal');
    $('.normal-line').fadeIn('normal');
  }
    
});

// Checkbox to show/hide danger marker
$('#danger-checkbox').change(function () {
  if (!this.checked){
    $('.dangerMarker').fadeOut('normal');
    $('.danger-line').fadeOut('normal');
  }
  else {
    $('.dangerMarker').fadeIn('normal');
    $('.danger-line').fadeIn('normal');
  } 
});

// Checkbox to show/hide very danger marker
$('#very-danger-checkbox').change(function () {
  if (!this.checked) {
    $('.veryDangerMarker').fadeOut('normal');
    $('.very-danger-line').fadeOut('normal');
  }
  else 
  {
    $('.veryDangerMarker').fadeIn('normal');
    $('.very-danger-line').fadeIn('normal');
  }
});

// Focus marker when click on panel
function setFocusByPosition(arrayLatLong){
  return mymap.setView(arrayLatLong, 16); 
}

document.querySelectorAll('.location-item').forEach(function(e){
  e.addEventListener('click', function(){
    var latLong = e.id.split("-");
    setFocusByPosition(latLong);
  })
})