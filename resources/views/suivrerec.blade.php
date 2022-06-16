<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL::to('images/commune.png')}}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/quasar@1.5.11/dist/quasar.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Document</title>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <title>Suivre réclamation</title>

  
   

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

*{
        box-sizing: content-box;
    }

    h1{
        font-size: 2em;
    }

button {
	border-radius: 30px;
	border: 1px solid #b44000;
	background-color: #b44000;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px ;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}



.bgbl h1{
        position: absolute;
    top: 129px;
    z-index: 9999;
    color: white;
    left: 82px;
    }

.container-f {
    margin:auto;
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    position:absolute;

    /* position: relative; */
    overflow: hidden;
    width: 90%;
    left:6%;
    top: 231px;
    min-height: 498px;
    z-index: 99999;
}
.container-f  h1{
    color:black;
    font-size:24px;

    position: inherit;

  color: black;
    left: 82px;
}



.log-in-container {
	left: 0;
	width: 60%;
	z-index: 2;
}


.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
}


.overlay {
	background: #b44000;

	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
}

.overlay svg{
color:#ffffff94;
}


.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 43%;
}


.overlay-right {
	right: 0;
}


.social-container {
	margin: 50px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

        body{
            overflow-y: auto;
        }
     
 
  
   
    .content{
  
    width: 100%;
  
    height: 400vh;
    position: absolute;
    color: black;
    line-height: 1.9;
    font-family: sans-serif;
    font-size: 13px; 

    }
    
footer{
    color: #ffff;
    padding: 10px;
    display: flex;
    flex-wrap: wrap-reverse;
    background: linear-gradient(0deg, rgba(180,64,0,1) 35%, rgba(211,88,21,1) 69%, rgba(180,52,0,1) 88%);
  

}
.sous-footer{
    width: 25%;
    min-width: 235px;
    text-align: center;
    margin: auto;
    margin-top: 20px;
}

.sous-footer a{
    
    display: block;
    color: white;
    text-decoration: none;
    margin: auto;
    transition: color 0.5s ease, margin 0.5s ease;
}
.sous-footer a:hover{
    margin-bottom: 3px;
    color: black;
}
    footer{
        height:20%;
        background: #3d3d3d;
        bottom: 0;
    position: absolute;
    background: #3d3d3d;
    z-index: 99999846;
    }
    .bgcont{

    
    height: 80%;
    background: url(http://localhost:8000/images/bgcont.png);
    background-repeat: no-repeat;


background-size: contain;
background-position: bottom;
background-color: white;
 
    }
    body{
        font-family: Poppins,sans-serif;

    }


    .rest{
        margin: auto;
        margin-top: 110vh;
    width: 75%;
    }
    .rest input{
        margin:0;
    }
    .rest h1{
        font-size: 43px;
    margin-bottom: -10px;
    color: #212529;
    line-height: 1.5;
    text-align: center;
    margin-bottom: 36px;
    }
    .soci{
     
    width: 20%;
    margin: auto;
    color: #000b;
    }
    .mes-ico{
            margin-left: 447px;
    margin-top: 26px;
        transition:0.5s;
    }
  
    
    .mes-ico:hover{
     
      transform:rotate(360deg);
    }


  .drop-dark{
    z-index: 999999;
    background: #000000d4;

  }
    @media (max-width: 992px) {
      
  .soci{
      width:56%;
  }

.rest {
    margin: auto;
        margin-top: 285vh;}
.rest h1 {
    font-size: 160%;
      }
footer {
    height: 40%;
}
    .container-f{
    margin: auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgb(0 0 0 / 25%), 0 10px 10px rgb(0 0 0 / 22%);
    position: absolute;
    /* position: relative; */
    overflow: hidden;
    width: 90%;
    left: 6%;
    top: 231px;
    min-height: 993px;
    }
    
.log-in-container {
    left: 0;
    width: 100%;
    z-index: 2;
}

.overlay-container {
    position: absolute;
    left: 100%;
    height: 159%;
    width: 100%;
}
.content {
    width: 100%;
    height: 584vh;

    position: absolute;
    top: 80vh;
}

.bgcont {
    height: 348vh;}
.overlay-panel,.overlay {
width:100%;
}
.mes-ico{
    margin-left: 140px;
    margin-top: 18px;
    margin-bottom: 6px;
}
.container-f h1 {
    color: black;
    font-size: 19px;
    }
}
h3{
    font-size:2em;
}
.block{
    background-color:white;
 
    margin-right:2em;
    margin-left:2em;
  
    width: 60%;
    margin: auto;
    border-radius: 15px;
    padding: 2em;
    margin-top: 1em;
    margin-bottom : 1em;
    box-shadow: 0 0 12px black;
}

/* .bgbl, .bgbl > * {
  position: relative;
} */
.bgbl, .bgbl > * {
  position: relative;
}
.bgbl:before {

    top: -14px;
    box-sizing:border-box;
    padding: 3em;
  content: " ";
  opacity: 0.2;
  background:  url('images/mos.jpg')  ;
background-size: cover;
  position: absolute;
  width: 100%;
  height: 120%;
}
.f-l{
    display:flex;
    justify-content:space-around;
}
.f-l h3{
    white-space: pre;
    font-weight: bold;
    width: 55%;
    color: #b43400;
    font-size: 2.5em;
}
.motif{
    width: 80%;
    margin: auto;
    border-radius: 5px;
    border: 1px solid #b43400;
    border-style: dashed;
    padding: 1em;
    position: relative;
}
.lab-mot{
    color:block;
    font-weight:bold;
    display: block;
    position: absolute;
    background-color: white;
    top: -16px;
    font-size:17px;
    width: 56px;
    padding-left: 7px;

}

.enq {
    margin-top:50px;
    color:white;
    width:85%;
    background: #b44400;
 	display: flex; 
     padding:5%;
     border-radius: 0 15px 15px 0;
	flex-direction: column;
	align-items: center;
    box-shadow: 0 4px 11px black;

}
.topText {
  font-size: 30px;
  font-weight: bold;
}
.selectSection {
	display: grid;
	grid-template-columns: repeat( 3, 1fr);
	justify-content: center;
	text-align: center;
  margin-top: 10px;
}
.selectSection button {
  font-size: 18px;
	background-color: rgba(209, 207, 207, 0.575);
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	margin-left: 10px;
	border: 0;
  padding: 0.5em;
}
.selectSection button:hover {
	cursor: pointer;
}
.activesec {
	background-color: #87CEEB !important;
}
/* hides every element except the first */
.contents:not(:first-child) {
	display: none;
}
.contentSection {
	margin: 40px;
	display: block;
	color: #666;
	display: grid;
}
.contents p {
	font-size: 20px;
	font-weight:normal;
	margin: 10px; 
	text-align: Center;
	color: black;
}
.contfade{
    display:none;
}
.content-fade{
    height: 100vh;
}
.bgcont-fade{
    height: 44%;
}
.footer-fade{
    height: 54%;

}

</style>
<body>
  



    @include('layouts.navigation')

        <div class="head-rec">
            <h1>Suivre une Réclamation</h1>
            
            <p>Accueil</p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><circle cx="16" cy="16" r="8" fill="currentColor"/></svg><p>Suivre une Réclamation</li>
            </p>
        </div>
 

<div class="bgbl" >
    <div class="block">
            <div class="f-l" >
                <h3 >Chercher votre réclamation </h3>
                <a href="#" class="logo">
                            <img src="images/commune.png" height="120px" width="70px" alt="" class="logo-nav">
                
                        </a>
                        </div>
                    <label class="lab-form">
                        <span class="ti-input" >Réference :</span>
                    <input  class="inp-form" type="text" name="ref" id="" requiered>
                    </label>
                    <div class="inp-radio">
                        <input type="radio" name="identifiant"  id="numero" checked>Numéro de téléphone
                        <input type="radio" name="identifiant" id="email">Email
                    </div>
                    <label class="lab-form phone form-step-active">
                        <span class="ti-input" >Numéro de téléphone :</span>

                    <input  class="inp-form"  type="tel" name="" id="">
                    </label>
                    <label class="lab-form adresse">
                        <span class="ti-input" >Email</span>
                    <input  class="inp-form" type="text" name="" id="">
                    </label>
                    <button id="btn-ser" class="btn btn-warning" style="margin-left: 80%;" onclick="openi()" >Chercher</button>
    </div>

</div>

<section id="content" class="content content-fade">

    <div  id="bgcont" class="bgcont bgcont-fade">
       <div id="contfade" class="contfade">
            <form action="" method="post" enctype="multipart/form-data">
            
                <div >
                    <div class="form form-step-active">
                    <label class="lab-form">
                            <span class="ti-input" >Catégorie</span>
                        <input  class="inp-form" type="text" value="{{__('Routes')}}"name="" id=""disabled>
                        </label>
                        
                        
                        <label class="lab-form" id="textar">
                            <span class="ti-input" >Détails</span>

                            <textarea  class="inp-form" name="" id="" cols="30" rows="2" disabled>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam quidem quia nisi vitae amet laborum officiis? Harum repellendus nam illo adipisci, inventore numquam. Impedit temporibus aliquid dolore accusamus laudantium magnam!</textarea>
                        </label>
                        <label class="lab-form" id="fich" style="cursor: pointer;">
                            <span class="ti-input" >Photos</span>
                            <svg  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120s53.8 120 120 120s120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88s39.5-88 88-88s88 39.5 88 88z"/></svg>
                            <label  for="frstimg">
                                <input type="file" name=""  id="fileupload"  multiple="multiple" disabled>
                                <div id="dvPreview">
                                    <img src="images/commune.png" height="100px" width="100px" alt="" srcset="">
                                </div>
                            </label>
                            <span id="fichier" ></span>
                        </label>
                    
                        <label class="lab-form">
                            <span class="ti-input" >Position</span>
                            <input id="my-input-searchbox" class="inp-form" disabled type="text" name="" value="Rue anaser fes">
                            
                        
                        </label>
                        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
                        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

            
                    </div>    
                    <div class="form form-step-active">
                        <label class="lab-form">
                            <span class="ti-input" >Nom Complet</span>
                        <input  class="inp-form" type="text" name="" id="" value="Alami Foad" disabled>
                        </label>
                      
                        <label class="lab-form  form-step-active">
                            <span class="ti-input" >Numéro de téléphone</span>

                        <input  class="inp-form"  type="tel" name="" id="" value="07893492222" disabled>
                        </label>
                        <label class="lab-form">
                            <span class="ti-input" >Email</span>
                        <input  class="inp-form" type="text" name="" id="" disabled>
                        </label>
                    </div>
                </div>       
                
            </form>
            <h3 style="color:#b43400; margin-left: 10%;">Votre réclamation est en cours de traitement .</h3>
            <div class="motif">
                <span class="lab-mot">Motif</span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ducimus eligendi consequatur deserunt, itaque atque fugit adipisci obcaecati doloremque ratione? Officia ad distinctio architecto sint eaque maiores enim natus hic?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quidem nulla deserunt nam delectus illo molestiae fuga excepturi. Deleniti praesentium repudiandae, natus quo totam ab unde veniam harum corrupti adipisci.

            </div>
            <div class="enq">
            
                    <p class="topText">Que pensez-vous de notre service ?</p>
                        <div class="selectSection">
                                <button type="button" data-number="1" class="activesec">Pas mal</button>
                                    <button type="button" data-number="2">bien</button>
                                    <button type="button" data-number="3">Parfait</button>
                        </div>

                        <!-- <div class="contentSection">
                            <div class="contents" data-number="1">
                                        <p>Pas mal</p>
                            </div>
                            <div class="contents" data-number="2">
                                        <p>bien</p>
                            </div>
                            <div class="contents" data-number="3">
                                        <p>Parfait</p>
                            </div>
                          
                        </div> -->
            </div>
        </div>    
    </div>
    <script>
            let Buttons = document.querySelectorAll(".selectSection button");

            // loop through the buttons using for..of 
            for (let button of Buttons) {
            // listen for a click event 
            button.addEventListener('click', (e) => {
                // et = event target
                const et = e.target;
                // slect active class
                const active = document.querySelector(".activesec");
                // check for the button that has active class and remove it
                if (active) {
                active.classList.remove("activesec");
                }
                // add active class to the clicked element 
                et.classList.add("activesec");
                
                // select all classes with the name content
                let allContent = document.querySelectorAll('.contents');

                // loop through all content classes
                for (let content of allContent) {
                // display the content if the class has the same data-attribute as the button 
                if(content.getAttribute('data-number') === button.getAttribute('data-number')) {
                    content.style.display = "block";
                }
                // if it's not equal then hide it.
                else {
                    content.style.display = "none";
                }
                }
            });
            }


    </script>
            

    <footer id="footerfade" class="footer-fade">
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
                    <img src="images/commune.png" height="120px" width="70px" alt="" class="logo-nav">
        
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


<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

<script>
                    //  var map = L.map('map').setView([ 33.971588,-6.849813], 13);
                    
                  
                    
   

                    //      var osm= L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    //         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    //     })
                    //     osm.addTo(map);
                     
                     
                    //    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                    //         maxZoom: 20,
                    //         subdomains:['mt0','mt1','mt2','mt3']
                    //     });
                                                
                         
                    //     googleStreets.addTo(map);
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


var content = document.getElementById('content');
    var bgcont = document.getElementById('bgcont');
    var contfade = document.getElementById('contfade');
    var footerfade = document.getElementById('footerfade');

    function openi(){
        console.log(document.querySelector("input[name='ref']").value);
        if(document.querySelector("input[name='ref']").value!=''){
        content.classList.remove("content-fade");
        bgcont.classList.remove("bgcont-fade");
        contfade.classList.remove("contfade");
        footerfade.classList.remove("footer-fade");}

    }

                
                    </script>
                    
                    <script  src="{{ asset('js/scriptrecla.js') }}"></script>

</body>
</html>