var pc = true;

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  pc = false;
}

var mymap = L.map("mapid", {
    center: [10.765933, 106.654556],
    zoom: 13,
    dragging: pc,
    tap: pc
});


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


// Load kml file
fetch('/files/vi-tri-sat-lo.kml')
  .then(res => res.text())
  .then(kmltext => {
    // Create new kml overlay
    const parser = new DOMParser();
    const kml = parser.parseFromString(kmltext, 'text/xml');
    const track = new L.KML(kml, 'text/xml');
    mymap.addLayer(track);

    // Adjust map to show the kml
    const bounds = track.getBounds();
    mymap.fitBounds(bounds);
}).catch((e) => {
  console.log(e);
});

// Add map legend
var legend = L.control({position: 'topright'});
    legend.onAdd = function (mymap) {

    var div = L.DomUtil.create('div', 'info-legend');
    labels = ['<strong>Chú thích</strong>'],
    categories = ['Sạt lở bình thường','Sạt lở nguy hiểm','Sạt lở rất nguy hiểm'];
    colors = ['blue', 'yellow', 'red'];

    for (var i = 0; i < categories.length; i++) {

            div.innerHTML += 
            labels.push(
                '<i class="circle" style="background:' + colors[i] + '"></i> ' +
            (categories[i] ? categories[i] : '+'));

        }
        div.innerHTML = labels.join('<br>');
    return div;
    };
    legend.addTo(mymap);