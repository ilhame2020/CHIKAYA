<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Chikaya Rabat</title>
    <link rel="shortcut icon" href="images/commune.png">
   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Document</title>
</head>
<style>
    *{
        user-select: none;;
    }
   .content{
  
  width: 100%;
    margin: 0;
  height: 620vh;
  position: absolute;
  color: black;


  }
  .bgcont{

    
height: 90%;
background: url(http://localhost:8000/images/bgcont.png);
background-repeat: no-repeat;


background-size: contain;
background-position: bottom;
background-color: white;

}
footer{
    height:10%;
}
@media screen and (max-width:600px){
    

    .logo-f{
        margin:0;
    }
        
    .content {
            width: 100%;
            margin: 0;
            height: 1578vh;
            position: absolute;
            color: black;
        }
    .bgcont{
            height:84.7%;
        }
    footer{
        height:15%;
    }        
    .bgimg{
height: 100%;
    background-position:bottom;

    background-size: contain;
}
}
</style>
<body>
<div id="topnav" class="navbar">
        <a href="#" class="logo">
 
            <img src="{{ URL::to('images/commune.png')}}" height="100px" width="62x" alt="" class="logo-nav">

        </a>
        <div class="navbar-right menu">
            <a href="#slide" class="active">
                Accueil
            </a>
            <a href="#propos" class="active">
                À propos
            </a>
            <a href="#service" class="active">
               Services
            </a>
            <a href="#statistique" class="active">
                Statistiques
             </a>
            <a href="#contact" class="active">
               Contact
             </a>
             <div id="lang" class="lang">
                <a  style="margin-left: 3%; color: black;"  onclick="showMenuLang()" >
                    Français  <i class="fa fa-angle-down"></i>
                </a>
                <ul id="all-lang" class="all-l">
                    <li  class="sous-lang">
                        <a  >
                            Français 
                        </a>
                    </li>    
                    <li  class="sous-lang" >
                        <a  >
                           العربية
                        </a>

                    </li>
                </ul>
            </div>

        </div>
        <div class="navbar-right">
            
        </div>    
        <div class="navbar-right">
            <a  class="icon" onclick="showMenu()" >
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <section class="content">
        <div class="bgcont">
      
    <div id="slide" class="slideshow-container" >
        <div class="slide-item bgimg" style="background-image:url({{ URL::to('images/phone_fr.jpeg')}});" >
    
            <div  class="caption">
                <h1>RABAT CITOYEN COMMUNE</h1>
                <p><b></b>
                    Portail Officiel de la mairie de Rabat
                </b></p>
            </div>
        </div>
       <!-- <div class="slide-item bgimg" style="background-image: url({{ URL::to('images/phone_fr.png')}});">
    
            <div class="caption">
               
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, mollitia hic. Error, vero? Labore libero et tempore illum ea, distinctio 
                    veniam, ullam placeat maiores aut volu
                    ptate minus, ut natus iusto?
                </p>
            </div>
        </div>
        <div class="slide-item bgimg"  >
    
            <div class="caption">
                <h2>lorem</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, mollitia hic. Error, vero? Labore libero et tempore illum ea, distinctio 
                    veniam, ullam placeat maiores aut volu
                    ptate minus, ut natus iusto?
                </p>
            </div>
        </div> -->
        <div class="slide-control">
            <span class="dot" onclick="chooseSlide(0)"></span>
            <span class="dot" onclick="chooseSlide(1)"></span>
            <span class="dot" onclick="chooseSlide(2)"></span>
          
        </div>
    </div>
    <div id="propos" class="statistiques-elements tag">
        <div class="st-el"><h2 class="numero" data-goal="400">0</h2><span>+</span>
        <h3>RÉclamation</h3>
         </div>
        <div class="st-el">
            <h2 class="numero" data-goal="600">0</h2><span>+</span>
         <h3>App Installation</h3>
        </div>
        <div class="st-el">
         <h2 class="numero" data-goal="500">0</h2><span>+</span>
         <h3>Des utilisateurs actifs</h3>
        </div>
    </div>
    <div class="apropos">
        <div class=" tag aprop-content">
            <h2>À propos</h2>
            <h5><b> Rabat Citoyen Commune est un service du portail officiel de la mairie de Rabat.</b> </h5>
            <p>Ce dernier permet de promouvoir les canaux d'interaction entre l'administration et le citoyen Rbatis et d'évaluer la performence de l'administration et d'améliorer la qualité des services de la commune de Rabat.</p>
        </div>
        <div class="tag aprop-photo">
            <img src="images/phonemaq.png" alt="" srcset="">
        </div>

    </div>
    <div class="objectifs" style="background: no-repeat url(URL::to('images/bg-objet.jpg'));">
        <h2>Les Objectifs</h2>
        <div class="obj-el">
            <div class="o-el tag">
                <div class="ic-el">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 3.5v11a2 2 0 0 0 2 2h11"/><path d="m6.5 12.5l3-3l2 2l5-5"/><path d="M16.5 9.5v-3h-3"/></g></svg>  
                </div>
                <div class="cont-el">
                    	Faciliter la soumission et le suivi des réclamations à tout moment, en tout lieu.                </div>
            </div>
            <div class="o-el tag">
                <div class="ic-el">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5L6.812 2.406zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093l-1.407-1.407zM16 3.03c-.33.004-.664.023-1 .064c-.01 0-.02-.002-.03 0c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.238 5.238 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97zm0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.792 7.792 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a6.91 6.91 0 0 1 .78-.064zM2 12v2h3v-2H2zm25 0v2h3v-2h-3zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5L7.5 20.094zm17 0L23.094 21.5l2.093 2.094l1.407-1.407l-2.094-2.093zM14 24h4v2h-4v-2z"/></svg>                </div>  
                <div class="cont-el">
                    	Présenter des solutions aux problèmes des citoyens Rbatis                 </div>    
            </div>
            <div class="o-el tag" >
                <div class="ic-el">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M27 10h-6a3.003 3.003 0 0 0-3 3v6a2.002 2.002 0 0 0 2 2v7a2.002 2.002 0 0 0 2 2h4a2.002 2.002 0 0 0 2-2v-7a2.002 2.002 0 0 0 2-2v-6a3.003 3.003 0 0 0-3-3zm1 9h-2v9h-4v-9h-2v-6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1zM20 5a4 4 0 1 1 4 4a4.004 4.004 0 0 1-4-4zm2 0a2 2 0 1 0 2-2a2.002 2.002 0 0 0-2 2zm-8 11v-3a3.003 3.003 0 0 0-3-3H5a3.003 3.003 0 0 0-3 3v3H0v2h16v-2zM4 13a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3H4zm0-8a4 4 0 1 1 4 4a4.004 4.004 0 0 1-4-4zm2 0a2 2 0 1 0 2-2a2.002 2.002 0 0 0-2 2z"/></svg> 
                </div>
                <div class="cont-el">
                Accueillir les observations, propositions et remarques des citoyens.            </div>
            </div>    
            <div class="o-el tag">
                <div class="ic-el">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="m328.7 52.28l103 67.52c17.8 13.1 21.6 38.1 8.5 55.9c-13.1 17.8-38.1 21.6-55.9 8.5l-87.7-57.1H191.1c-7.9 0-16 8.1-16 16c0 9.6 8.1 16 16 16h63.1c16 0 29.9 11.8 33.4 27.5c3.2 20-12.1 36.5-32.5 36.5h-112c-27 0-52.23-8.4-73.23-25.4l-46.5-38.6l-8.27.9C7.25 160 0 152.7 0 143.1V47.99C0 39.25 7.25 32 15.1 32h251c22.9 0 44.8 7.19 62.6 20.28zM151.3 459.7L16.27 360.2c-17.779-13.1-21.575-38.1-8.467-55.9c13.127-17.8 38.137-21.6 55.937-8.5L183.4 384H304c8.8 0 16-7.2 16-16c0-8.7-7.2-16-16-16h-78.2c-16 0-30.8-10.9-33.4-26.6c-3.2-20 12.1-37.4 31.6-37.4h128c27 0 53.1 9.3 74.1 26.3l46.5 37.7H496c8.7 0 16 7.3 16 16v96c0 8.8-7.3 16-16 16H213c-22.9 0-43.9-7.2-61.7-20.3z"/></svg>
               </div>
               <div id="service" class="cont-el">
               Donner l'opportunité aux citoyens à  participer à l'amélioration des services de la commune de Rabat.
                </div>
            </div>
        </div>

    </div>


    <div  class="services">
        <h2>Nos services</h2>
        <div class="sous-serv tag">
            <div class="sous-serv-ico">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M28 2H8a2 2 0 0 0-2 2v28a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM13 26h-2v-2h2Zm0-4h-2v-2h2Zm0-4h-2v-2h2Zm0-4h-2v-2h2Zm0-4h-2V8h2Zm12 16H15v-2h10Zm0-4H15v-2h10Zm0-4H15v-2h10Zm0-4H15v-2h10Zm0-4H15V8h10Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="none" d="M0 0h36v36H0z"/></svg>
            </div>
            <div class="sous-serv-cont">
                <h3>Soumission d'une réclamation</h3>
                <div class="line"></div>
                 <h3>Consiste à identifier le service concerné et introduire les renseignements personnels et les données nécessaires relatives à la nature de la réclamation.
        
                 </h3>  

            </div>
            <div class="sous-serv-link">
            <a href="/soumission-reclamation" >
                <h3>Soumettre</h3>
            </a>
            </div>
        </div>
        <div class="sous-serv tag">
            <div class="sous-serv-ico">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1792 1408"><path fill="currentColor" d="M384 1216q0 80-56 136t-136 56t-136-56t-56-136t56-136t136-56t136 56t56 136zm0-512q0 80-56 136t-136 56t-136-56T0 704t56-136t136-56t136 56t56 136zm1408 416v192q0 13-9.5 22.5t-22.5 9.5H544q-13 0-22.5-9.5T512 1312v-192q0-13 9.5-22.5t22.5-9.5h1216q13 0 22.5 9.5t9.5 22.5zM384 192q0 80-56 136t-136 56t-136-56T0 192T56 56T192 0t136 56t56 136zm1408 416v192q0 13-9.5 22.5T1760 832H544q-13 0-22.5-9.5T512 800V608q0-13 9.5-22.5T544 576h1216q13 0 22.5 9.5t9.5 22.5zm0-512v192q0 13-9.5 22.5T1760 320H544q-13 0-22.5-9.5T512 288V96q0-13 9.5-22.5T544 64h1216q13 0 22.5 9.5T1792 96z"/></svg>
            </div>
            <div class="sous-serv-cont">
                <h3>Suivre une réclamation</h3>
                <div class="line"></div>
                 <h3>
                    Le citoyen peut consulter l’état d’avancement du traitement de ses réclamations en utilisant la référence de la réclamation et son adresse électronique ou son numéro du téléphone. Le citoyen est également notifié par mail ou par téléphone du traitement de sa demande. 
                 </h3>  

            </div>
            <div class="sous-serv-link">
                <a href="/suivre-reclamation">
                    <h3>Suivre une reclamation</h3>
                </a>
                </div>

        </div>
        <div class="sous-serv tag">
            <div class="sous-serv-ico">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M17.28 8.72a.75.75 0 0 1 0 1.06l-2 2a.75.75 0 0 1-1.06 0l-1-1a.75.75 0 1 1 1.06-1.06l.47.47l1.47-1.47a.75.75 0 0 1 1.06 0Zm0 6.56a.75.75 0 1 0-1.06-1.06l-1.47 1.47l-.47-.47a.75.75 0 1 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2ZM7 10.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75ZM7.75 15a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Zm8.236-11a2.25 2.25 0 0 0-2.236-2h-3.5a2.25 2.25 0 0 0-2.236 2H6.25A2.25 2.25 0 0 0 4 6.25v13.5A2.25 2.25 0 0 0 6.25 22h11.5A2.25 2.25 0 0 0 20 19.75V6.25A2.25 2.25 0 0 0 17.75 4h-1.764ZM10.25 6.5h3.5c.78 0 1.467-.397 1.871-1h2.129a.75.75 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75H6.25a.75.75 0 0 1-.75-.75V6.25a.75.75 0 0 1 .75-.75h2.129c.404.603 1.091 1 1.871 1Zm0-3h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1 0-1.5Z"/></svg>           
                </div>
                <div class="sous-serv-cont">
  
                    <h3>Soumettre une proposition ou observation</h3>
 
                <div    class="line"></div>
                 <h3>Espace de contact disponible permetant de contacter la commune, en attachant des pièces jointes au contenu, si nécessaire  
                 </h3>  

            </div>
            <div   class="sous-serv-link">
                <a href="/soumission-proposition" >
                    <h3>Soumettre</h3>
                </a>
                
                </div>
               
        </div>
        
    </div><span id="statistique" ></span>
    <h2  style=" margin-top: 50px;    text-align: center;">Des Chiffres Clés</h2>
    <div class="statistique">
        <div class=" tag sta-element" style="background-color: #b44000;">
            <div  style="color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g fill="currentColor"><path d="M10 8a1 1 0 0 0 0 2V8Zm4 2a1 1 0 1 0 0-2v2Zm-4 5a1 1 0 1 0 0 2v-2Zm12 2a1 1 0 1 0 0-2v2Zm-12 2a1 1 0 1 0 0 2v-2Zm12 2a1 1 0 1 0 0-2v2Zm-12 2a1 1 0 1 0 0 2v-2Zm4 2a1 1 0 1 0 0-2v2ZM8 4h16V2H8v2Zm17 1v22h2V5h-2Zm-1 23H8v2h16v-2ZM7 27V5H5v22h2Zm1 1a1 1 0 0 1-1-1H5a3 3 0 0 0 3 3v-2Zm17-1a1 1 0 0 1-1 1v2a3 3 0 0 0 3-3h-2ZM24 4a1 1 0 0 1 1 1h2a3 3 0 0 0-3-3v2ZM8 2a3 3 0 0 0-3 3h2a1 1 0 0 1 1-1V2Zm2 8h4V8h-4v2Zm0 7h12v-2H10v2Zm0 4h12v-2H10v2Zm0 4h4v-2h-4v2Z"/><circle cx="22" cy="9" r=".5" stroke="currentColor"/></g></svg>            </div>
            <div class="sous-sta-cont">
                <h3 class="num" data-goal="100">0</h3><span>+</span>

                 <h3>Réclamation Ouverte
                 </h3>  

            </div>
        </div>
        <div class="tag sta-element" style="background-color: rgb(255, 138, 80);">
            <div style="color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M12.825 10.653c.118-.258.445-.497.727-.529s.539-.29.571-.572c.034-.28.272-.608.529-.727a.69.69 0 0 0 .369-.72c-.058-.278.068-.663.276-.854a.689.689 0 0 0 .127-.801a1.017 1.017 0 0 1 0-.897a.688.688 0 0 0-.127-.801c-.208-.193-.333-.577-.276-.854a.691.691 0 0 0-.369-.722a1.03 1.03 0 0 1-.529-.727a.689.689 0 0 0-.571-.572a1.024 1.024 0 0 1-.727-.528a.686.686 0 0 0-.722-.366a1.024 1.024 0 0 1-.854-.278c-.193-.21-.553-.266-.8-.127s-.652.139-.898 0a.684.684 0 0 0-.801.125a1.022 1.022 0 0 1-.854.278a.685.685 0 0 0-.72.367c-.119.256-.446.495-.728.527a.69.69 0 0 0-.572.573a1.023 1.023 0 0 1-.529.726a.69.69 0 0 0-.366.722c.055.277-.07.662-.278.854s-.266.552-.127.801c.139.246.139.651 0 .897a.69.69 0 0 0 .127.802c.209.19.333.575.278.854a.687.687 0 0 0 .366.72c.258.119.495.447.528.727c.034.282.29.54.572.572s.609.272.728.529a.688.688 0 0 0 .72.366c.278-.055.663.069.854.278a.69.69 0 0 0 .801.127c.246-.139.651-.139.898 0s.607.081.8-.127c.193-.21.576-.333.854-.278a.69.69 0 0 0 .723-.365zM10 9.399a3.4 3.4 0 1 1 0-6.8a3.4 3.4 0 0 1 0 6.8zm-4.025 2.01l-1.243 7.049l3.128-.464l2.781 1.506l1.238-7.021a6.707 6.707 0 0 1-5.904-1.07zm7.986.048a6.741 6.741 0 0 1-.99.597l-.748 4.236l3.369-1.828l-1.631-3.005z"/></svg>            </div>

            <div class="sous-sta-cont">
                <h3 class="num" data-goal="100">0</h3><span>+</span>

                 <h3>Taux de Satisfaction
                 </h3>  

            </div>
        </div>
        <div class="tag sta-element" style="background-color: rgb(254, 169, 129);">
          
                <div style="color: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m23.5 17l-5 5l-3.5-3.5l1.5-1.5l2 2l3.5-3.5l1.5 1.5M6 2c-1.11 0-2 .89-2 2v16c0 1.11.89 2 2 2h7.81c-.53-.91-.81-1.95-.81-3c0-.33.03-.67.08-1H6v-2h7.81c.46-.8 1.1-1.5 1.87-2H6v-2h12v1.08c.33-.05.67-.08 1-.08c.34 0 .67.03 1 .08V8l-6-6m-1 1.5L18.5 9H13Z"/></svg>               
                 </div>
                
                <div class="sous-sta-cont">           
                <h3 class="num" data-goal="100">0</h3><span>+</span>

                 <h3>Réclamation Résolue
                 </h3>  

            </div>
        </div>
        <div class="tag sta-element" style="background-color: rgb(205, 122, 84);">
            <div  style="color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M6 2a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5Zm3.535 4.361a2 2 0 1 1 3.121-.24a5.522 5.522 0 0 0-3.121.24ZM6.207 13H6.06C3.446 13 2 12.098 2 10.276V9.5A1.5 1.5 0 0 1 3.5 8h3.757A5.478 5.478 0 0 0 6 11.5a5.5 5.5 0 0 0 .207 1.5Zm5.293 3a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9Zm2.354-5.646l-3 3a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647l2.646-2.647a.5.5 0 0 1 .708.708Z"/></svg>            </div>
           
            <div id="contact" class="sous-sta-cont">
                <h3 class="num" data-goal="100">0</h3><span>+</span>

                 <h3>Services Adhérés
                 </h3>  

            </div>
        </div>
    </div>
    <div class="tag contact">
            <h2>Contact</h2>
            <p>N'hésiter pas de nous contacter pour recevoir plus d'informations ou pour une proposition ou réclamation , notre conseiller sera à votre service. </p>
            <div class="button"><a href="/contact">Contactez-nous</a></div>
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
                <img src="images/commune.png" height="120px" width="70x" alt="" class="logo-f">
    
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
 <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>