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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

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
    width: 270px;
    height: 40px;
    text-overflow: ellipsis;
    padding: 0 1em;
    }
    #map {
    height: 100%;
    }
    .sous-lang a{
        
        background-color: white;
    }
    .content{
  
  width: 100%;
    margin: 0;
  height: 200vh;
  position: absolute;
  color: black;


  }
  .bgcont{

    
height: 60%;
background: url(http://localhost:8000/images/bgcont.png);
background-repeat: no-repeat;


background-size: contain;
background-position: bottom;
background-color: white;

}
footer{
    height:40%;
}
 
@media screen and (max-width:600px){
    .all-l{
        width: inherit;
        left: 13rem;
        position: absolute;
        top: 142px;
    }}
</style>

<body>
    @include('layouts.navigation')
    <section class="content">
        <div class="bgcont">
        <div class="head-rec">
            <h1>SOUMISSION D'UNE RECLAMATION</h1>
            
            <p>Accueil</p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><circle cx="16" cy="16" r="8" fill="currentColor"/></svg><p>Soumission d'une Réclamation</li>
            </p>
        </div>
        <div class="head-mes">
            <div class="message">
            <p><b>Votre réclamation été envoyé à notre base de données .</b></p>
            <p><b>Veuillez garder ce numero de réference : <em style="color:red;">#n34343</em> .</b></p>
            <p><b>Vous en aurez besoin pour suivre votre réclamation.</b></p>
    
        </div>
            <div class="tag contact">
            <div class="button"><a href="">Imprimer</a></div>
            </div>
        </div>
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

</body>
</html>