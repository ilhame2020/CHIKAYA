function openDrop(){
    document.getElementById("dropdown-menu").classList.toggle("active");
    }

    function getimage(imagename){
        // var imagename=imagename.replace(/^.*\\/,"");
        // console.log(imagename);
       for(i=0;i<imagename.length;i++){
        console.log(imagename[i]);
       }
    document.getElementById('fichier').innerHTML=imagename;

    }
   
    $(function () {
$("#fileupload").change(function () {
    let i=0;
    if (typeof (FileReader) != "undefined") {
        var dvPreview = $("#dvPreview");
        dvPreview.html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        $($(this)[0].files).each(function () {
            var file = $(this);
            if (regex.test(file[0].name.toLowerCase())) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = $("<img />");
                    img.attr("style", "height:100px;width: 100px");
                    img.attr("src", e.target.result);
                    dvPreview.append(img);
                }
            } else {
                alert(file[0].name + " is not a valid image file.");
                dvPreview.html("");
                return false;
            }
        });
    } else {
        alert("This browser does not support HTML5 FileReader.");
    }
});
});

var btn = $('#but-stick');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
var map = L.map('map').setView([51.505, -0.09], 13);
                     var marker = L.marker([51.505, -0.09],{
                        draggable: true,
                        autoPan: true
                    }).addTo(map);
                    var marker = L.marker([33.987122, -6.836753]).addTo(map);

var test = marker.bindPopup(" ").openPopup();
marker.on('click', onClick);

function onClick(e) {
   var popup = e.target.getPopup();
   var content = popup.getContent();

   console.log(content);
}
                  
                    var geocoder = L.Control.geocoder().addTo(map),
    latInput = document.getElementById('latitude'),
    lngInput = document.getElementById('longitude'),
    previousMarker;

// Customize what to do from the result.
geocoder.markGeocode = function (result) {
    var latlng = result.center;

    // Remove previous marker if any.
    if (previousMarker) {
        map.removeLayer(previousMarker);
    }

    previousMarker = L.marker(latlng, {
        draggable: true // Create a draggable marker.
    }).addTo(map).
    on('dragend', onDragEnd). // Attach position display.
    bindPopup(result.html). // Emulate Geocoder default behaviour.
    openPopup(); // bind a popup and open it right away.

    displayLatLng(latlng); // Display position right away.
};

function onDragEnd(event) {
    var latlng = event.target.getLatLng();

    displayLatLng(latlng);
}

function displayLatLng(latlng) {
    latInput.value = latlng.lat;
    lngInput.value = latlng.lng;
}   
  var osm= L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        })
                        osm.addTo(map);
                     
                     
                       var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                            maxZoom: 20,
                            subdomains:['mt0','mt1','mt2','mt3']
                        });
                                                
                        googleStreets.addTo(map);     
                       
                        map.on('popupopen', function(e) {
                          
                            d=marker.getPopup();
                          
                            newLatLng =  document.querySelectorAll('.leaflet-popup-content span')[0].textContent +' ' ;
                         
                            console.log(document.querySelectorAll('.leaflet-popup-content span'));
                            setTimeout
                                (
                                    function()
                                    {   console.log(d);
                                        $('#my-input-searchbox').val(newLatLng);
                                    },
                                    5000
                                );
                        }); 
