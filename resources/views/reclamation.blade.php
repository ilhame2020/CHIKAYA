<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumission d'une réclamation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{ URL::to('images/commune.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Document</title>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/quasar@1.5.11/dist/quasar.min.css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />

</head>
<style>
    *{
        box-sizing: content-box;
    }
    h1{
        font-size: 2em;
    }
    .q-field--filled .q-field__control {
   
    background: rgb(255 255 255);
    border-radius: 4px 4px 0 0;
    }
    .q-pa-md {
    padding: 0;
    /* padding: 16px 16px; */
    }
    h3 {
    font-size: 2rem;
    letter-spacing: normal;
    }
    .q-field--filled.q-field--focused .q-field__control::before,.q-field--filled{
        opacity: 1;
        background-color: white;
    }
    .q-menu{
        z-index: 1;
    }
    #my-input-searchbox {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
    font-size: 15px;
    border-radius: 3px;
    border: 0;
    margin-top: 10px;
    width: 90%;
    height: 40px;
    text-overflow: ellipsis;
    padding: 0 1em;
    }
    #map {
    height: 40vh;
    width: 100%;
    }
    .sous-lang a{
        
        background-color: white;
    }
  .content{    
  width: 100%;
    margin: 0;
  height: 350vh;
  position: absolute;
  color: black;


  }
  .bgcont{

    
height: 80%;
background: url(http://localhost:8000/images/bgcont.png);
background-repeat: no-repeat;


background-size: contain;
background-position: bottom;
background-color: white;

}
footer{
    height:20%;
}
 
@media screen and (max-width:600px){
    .all-l{
        width: inherit;
        left: 13rem;
        position: absolute;
        top: 142px;
    }}
</style>
<script>
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
                    reader.readAsDataURL(file[0]);
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
    
</script>
<body>
    @include('layouts.navigation')
<section  class="content">
    <div class="bgcont">
        <div class="head-rec">
            <h1>SOUMISSION D'UNE RECLAMATION</h1>
            
            <p>Accueil</p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><circle cx="16" cy="16" r="8" fill="currentColor"/></svg><p>Soumission d'une Réclamation</li>
            </p>
        </div>
        <div class="head-mes">
            <p><b>Il ne vous faudra que quelques minutes pour remplir ce formulaire .</b></p>
            <p><b>Votre réclamation prendra effet dans les plus brefs délais.</b></p>
        </div>
        <a id="but-stick"></a>
        <script>
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


        </script>
       <form action="" method="post" enctype="multipart/form-data">
            <!-- progressbar -->
            <div class="form-step form-step-active">
                <div class="progressbar">
                    <div class="progressstep progresscolor">
                        <svg  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M23.906 3.969A4.097 4.097 0 0 0 21 5.188L5.187 21l-.062.313l-1.094 5.5l-.312 1.468l1.469-.312l5.5-1.094l.312-.063L26.813 11a4.075 4.075 0 0 0 0-5.813a4.097 4.097 0 0 0-2.907-1.218zm0 1.906c.504 0 1.012.23 1.5.719c.973.972.973 2.027 0 3l-.718.687l-2.97-2.969l.688-.718c.489-.489.996-.719 1.5-.719zm-3.593 2.844l2.968 2.969L11.188 23.78a6.813 6.813 0 0 0-2.97-2.968zM6.938 22.438a4.734 4.734 0 0 1 2.625 2.625l-3.282.656z"/></svg>         </div>
                    <div class="progressstep">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1H3zm5-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6z"/></svg>
                    </div>
                    <div class="progressstep">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9 16.2L4.8 12l-1.4 1.4L9 19L21 7l-1.4-1.4L9 16.2z"/></svg>
                    </div>
                </div>
            </div>
            <div  class="form-step">
                <div class="progressbar-1">
                    <div class="progressstep progresscolor">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M23.906 3.969A4.097 4.097 0 0 0 21 5.188L5.187 21l-.062.313l-1.094 5.5l-.312 1.468l1.469-.312l5.5-1.094l.312-.063L26.813 11a4.075 4.075 0 0 0 0-5.813a4.097 4.097 0 0 0-2.907-1.218zm0 1.906c.504 0 1.012.23 1.5.719c.973.972.973 2.027 0 3l-.718.687l-2.97-2.969l.688-.718c.489-.489.996-.719 1.5-.719zm-3.593 2.844l2.968 2.969L11.188 23.78a6.813 6.813 0 0 0-2.97-2.968zM6.938 22.438a4.734 4.734 0 0 1 2.625 2.625l-3.282.656z"/></svg>         </div>
                    <div class="progressstep progresscolor">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1H3zm5-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6z"/></svg>
                    </div>
                    <div class="progressstep">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9 16.2L4.8 12l-1.4 1.4L9 19L21 7l-1.4-1.4L9 16.2z"/></svg>
                    </div>
                </div>
                 
            </div>
            <div  class="form-step">
                <div class="progressbar-2">
                    <div class="progressstep progresscolor">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M23.906 3.969A4.097 4.097 0 0 0 21 5.188L5.187 21l-.062.313l-1.094 5.5l-.312 1.468l1.469-.312l5.5-1.094l.312-.063L26.813 11a4.075 4.075 0 0 0 0-5.813a4.097 4.097 0 0 0-2.907-1.218zm0 1.906c.504 0 1.012.23 1.5.719c.973.972.973 2.027 0 3l-.718.687l-2.97-2.969l.688-.718c.489-.489.996-.719 1.5-.719zm-3.593 2.844l2.968 2.969L11.188 23.78a6.813 6.813 0 0 0-2.97-2.968zM6.938 22.438a4.734 4.734 0 0 1 2.625 2.625l-3.282.656z"/></svg>         </div>
                    <div class="progressstep progresscolor">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1H3zm5-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6z"/></svg>
                    </div>
                    <div class="progressstep progresscolor">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9 16.2L4.8 12l-1.4 1.4L9 19L21 7l-1.4-1.4L9 16.2z"/></svg>
                    </div>
                </div>
            </div>    
             <!-- progressbar fin -->
             <div >
                <div class="form form-step-active">
                    <label class="lab-form" style=" padding-top: 6px;">
                        <span class="ti-input" >Catégories</span>

                        <div id="q-app">
                            <div class="q-pa-md">
                                <div class="q-gutter-md">
                                  
                                  <q-select
                                    filled
                                    v-model="model"
                                    :options="options"
                                    label=""
                                    color="white"
                                    clearable
                                    options-selected-class="text-deep-orange-8"
                                    
                                  >
                                    <template v-slot:option="scope">
                                      <q-expansion-item
                                        expand-separator
                                        group="somegroup"
                                        :default-opened="hasChild(scope)"
                                         header-class="text-weight-bold"
                                        :label="scope.opt.label"
                                      >
                                        <template v-for="child in scope.opt.children">
                                          <q-item
                                            :key="child.label"
                                            clickable
                                            v-ripple
                                            v-close-popup
                                            @click="model = child.label"
                                            :class="{ 'bg-light-blue-1': model === child.label }"
                                          >
                                            <q-item-section>
                                              <q-item-label v-html="child.label" class="q-ml-md" ></q-item-label>
                                            </q-item-section>
                                          </q-item>
                                        </template>
                                      </q-expansion-item>
                                    </template>
                                  </q-select>
                                </div>
                              </div>
                          </div>
                          <!-- partial -->
                            <script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script>
                          <script src='https://cdn.jsdelivr.net/npm/quasar@1.5.11/dist/quasar.umd.min.js'></script>
                          <script  src="{{ asset('js/script22.js') }}"></script>
                          
                    </label>
                    
                       
                    <label class="lab-form" id="textar">
                        <span class="ti-input" >Détails</span>

                        <textarea  class="inp-form" name="" id="" cols="30" rows="2"></textarea>
                    </label>
                    <label class="lab-form" id="fich" style="cursor: pointer;">
                        <span class="ti-input" >Photos</span>
                        <svg  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120s53.8 120 120 120s120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88s39.5-88 88-88s88 39.5 88 88z"/></svg>
                        <label  for="frstimg">
                            <input type="file" name=""  id="fileupload"  multiple="multiple">
                            <div id="dvPreview">
                            </div>
                        </label>
                        <span id="fichier" ></span>
                    </label>
                
                    <label class="lab-form">
                        <span class="ti-input" >Position</span>
                        <input id="my-input-searchbox" class="inp-form" type="text" name="">
                        
                        <div id="map"></div>
                      
                    </label>
                    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
                    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

                    <script>
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
                          
                            newLatLng =  document.querySelectorAll('.leaflet-popup-content')[0].textContent +' ' ;
                         
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
                        // map.on('popupopen', function(e) {
                        //     console.log('dragend'); 
                        //     d=e.layer.getPopup();
                        //     newLatLng = d.getContent() + ' ' + marker.getLatLng().lng;
                        //     console.log(newLatLng);
                        //     setTimeout
                        //         (
                        //             function()
                        //             {
                        //                 $('#my-input-searchbox').val(newLatLng);
                        //             }, 
                        //             5000
                        //         ); 
                        // });
                          
                    </script>
                </div>    
                    <a href="#" class="sui form-step-active bg-white" >Suivant &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12A10 10 0 0 1 12 2a10 10 0 0 1 10 10a10 10 0 0 1-10 10A10 10 0 0 1 2 12m8 5l5-5l-5-5v10Z"/></svg> </a > 
                <div class="form ">
                    <label class="lab-form">
                        <span class="ti-input" >Nom Complet</span>
                    <input  class="inp-form" type="text" name="" id="">
                    </label>
                    <div class="inp-radio">
                        <input type="radio" name="identifiant"  id="numero" checked>Numéro de téléphone
                        <input type="radio" name="identifiant" id="email">Email
                    </div>
                    <label class="lab-form phone form-step-active">
                        <span class="ti-input" >Numéro de téléphone</span>

                    <input  class="inp-form"  type="tel" name="" id="">
                    </label>
                    <label class="lab-form adresse">
                        <span class="ti-input" >Email</span>
                    <input  class="inp-form" type="text" name="" id="">
                    </label>
                </div>
            </div>       
                <a href="#" class="sui bg-white" >Suivant &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M2 12A10 10 0 0 1 12 2a10 10 0 0 1 10 10a10 10 0 0 1-10 10A10 10 0 0 1 2 12m8 5l5-5l-5-5v10Z"/></svg> </a> 
                
                <div class="btn-env"><a href="">Envoyer</a></div>
            </div>
        </form>
        </div>
        <footer>
        <div class="sous-footer">
            <h3>TELECHARGER NOTRE APP</h3>
            <a href="">
            <img src="images/appstore.png" width="50%" height="50px" alt="">
             </a>
             <a href="">
            <img src="images/googleplay.jpg"  width="50%" height="50px" alt="">
            </a>
        </div>
        <div class="sous-footer">
            <a href="#" class="logo">
                <img src="images/commune.png" height="120px" width="70x" alt="" class="logo-nav">
    
            </a>
            <p>Notre objectif est de présenter des solutions aux problèmes des citoyens Rbatis.</p>
            <div>

            </div>
        </div>
        <div class="sous-footer">
            <h3>Liens rapides</h3>
            <a href="#slide">Accueil</a>
            <a href="#service">Services</a>
            <a href="#propos">A propos</a>
            <a href="#statistique">Statistiques</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="sous-footer">
            <h3>Suivez-Nous</h3>
            <a href="">Facebook</a>
            <a href="">Instagram</a>
            <a href="">Linkedin</a>
            <a href="">Twitter</a>
            <a href="">Youtube</a>
        </div>
    </footer>
    </section>

    
    <script>

const optgroups=document.querySelectorAll("optgroup");
const options=document.querySelectorAll("option");

const nextSuiv=document.querySelectorAll(".sui");
const form=document.querySelectorAll(".form");
const formSteps=document.querySelectorAll(".form-step");
const btnenv=document.querySelector(".btn-env");
let formStepsnum =1;
nextSuiv.forEach( (btn)  =>{
    btn.addEventListener("click",(e)=>{
       e.preventDefault();
      
 
       formStepsnum++;
        if(formStepsnum<3){
       
        updateForm(formSteps);
        updateForm(form);
        updateForm(nextSuiv);
      
        }else{
            updateForm(formSteps);
            dispAll();
            nextSuiv[1].classList.remove("form-step-active");
        }
    }
    );
});

function updateForm(v){
   v.forEach((s)=>{
       s.classList.contains("form-step-active") &&
        s.classList.remove("form-step-active");
   });
    v[formStepsnum-1].classList.add("form-step-active");

}
function dispAll(){
    form.forEach(element => {
        element.classList.add("form-step-active");
    });
    
    btnenv.classList.add("form-step-active");
}
const numero=document.getElementById("numero");
const numero1=document.getElementById("numero1");
const phone=document.querySelector(".phone");
const adresse=document.querySelector(".adresse");
const phone1=document.querySelector(".phone1");
const adresse1=document.querySelector(".adresse1");
const email=document.getElementById("email");
const email1=document.getElementById("email1");
numero.addEventListener('change',function(){
    
phone.classList.add("form-step-active");
adresse.classList.remove("form-step-active");
});

email.addEventListener('change',function(){

phone.classList.remove("form-step-active");
adresse.classList.add("form-step-active");

});


    
    



</script>
<script  src="{{ asset('js/scriptrecla.js') }}"></script>

</body>
</html>