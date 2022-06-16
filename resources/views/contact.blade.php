<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="shortcut icon" href="{{ URL::to('images/commune.png')}}">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <title>Page d'acceuil générale</title>

  
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
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

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
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


.form-container {
	position: absolute;
	top: 0;
	height: 100%;
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
        .navbar{
            z-index: 999999;
            background-color:#ffff;
            color:black;
            padding-top: 0;
            padding-bottom: 0;
        }
 
    #map{
     
        height: 110vh;
    top: 0;
    width: 100%;
    position: absolute;
    }
    .bgbl{
        
     
    }
    #map::after{
        content:"";
        position: absolute;
        top:0;
        right:0;
        left:0;
        bottom:0;
       z-index: 9999;
        background: linear-gradient(82deg, rgba(245,242,241,1) 0%, rgba(180,64,0,1) 0%, rgba(180,64,0,0.7192158195542993) 47%, rgba(221,138,88,0.8092779313555416) 65%, rgba(255,199,162,0.5608307263865975) 82%, rgba(255,255,255,0) 100%);    

    }
    .content{
  
    width: 100%;
  
    height: 216vh;
    position: absolute;
    top: 60vh;
    z-index: 9999;

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
        height:25%;
        background: #3d3d3d;
        bottom: 0;
    position: absolute;
    background: #3d3d3d;
    z-index: 99999846;
    }
    .bgcont{

    
    height: 160vh;
    background: url(http://localhost:8000/images/bgcont.png);
    background-repeat: no-repeat;


background-size: contain;
background-position: bottom;
background-color: white;
 
    }
    

.navbar-dark .navbar-toggler-icon {
    background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
}
.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
}
* {
    box-sizing: border-box;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.navbar-dark .navbar-toggler {
    color: rgb(0 0 0);
    border-color: rgba(255,255,255,.1);
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
@media (max-width: 992px){
.nav-item:hover, .drop-dark a:hover {
 background: #ffff;

}}


.nav-item:hover, .drop-dark a:hover {
    background: #ffff;
    color: #b44000;
}
.navbar-toggler {

    background-color: #b44000b0;}
    .navbar-dark .navbar-toggler {
     color: rgb(255 255 255); 
     border-color: rgba(255,255,255,.1);

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

    .nav-item,.drop-dark a{
    transition: background .5s ease-in-out, color .5s ease-in-out;
    color: rgba(255,255,255,.55);
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
    z-index: 99999;
    }
    
.log-in-container {
    left: 0;
    width: 100%;
    z-index: 2;
}
.form-container {
    position: absolute;
    top: 0;
    height: 50%;
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
    top: 60vh;
    z-index: 9999;
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
</style>
<body>
    <body>



        <nav class="navbar navbar-expand-sm navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="{{ URL::to('images/commune.png')}}" height="60px" width="42x" alt="" class="logo-nav">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
      <ul class=" ml-3 navbar-nav ">
        <li class="nav-item px-3 mx-3">
          <a class="nav-link  text-dark" href="/">Accueil</a>
        </li>
        <li class="nav-item px-3 mx-3">
          <a class="nav-link text-dark" href="#">A propos</a>
        </li>
        <li class="nav-item px-3 mx-3 dropdown">
          <a class="nav-link dropdown-toggle  text-dark" href="#" role="button" data-bs-toggle="dropdown">Services</a>
          <ul class="dropdown-menu drop-white ">
            <li><a class="dropdown-item p-2  text-dark" href="#">Soumission d'une réclamation </a></li>
            <li><a class="dropdown-item p-2  text-dark" href="#">Soumission d'une proposition</a></li>
            <li><a class="dropdown-item p-2  text-dark" href="#">Suivie d'une réclamation</a></li>
          </ul>
        </li>
        <li class="nav-item px-3 mx-3">
          <a class="nav-link  text-dark" href="#">Statistiques</a>
        </li> 
        <li class="nav-item px-3 mx-3">
          <a class="nav-link  text-dark" href="/contact">Contact</a>
        </li>   
       
      </ul>
    </div>
  </div>
</nav>
 

<div class="bgbl">
<div id="map">
  
</div>
<h1>Contactez-Nous</h1>
<div class="container-f" id="container">
		<div class="form-container log-in-container">
			<form action="#">
				<h1>ENVOYEZ-NOUS UN MESSAGE <svg style="color:#b44000;" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M41.47 7.28H6.53a2 2 0 0 0-2 1.88v22.25a2 2 0 0 0 2 1.88h2.61v7.43l8.26-7.43h24.07a2 2 0 0 0 2-1.88V9.16a2 2 0 0 0-2-1.88ZM14.25 17A3.25 3.25 0 1 1 11 20.29A3.24 3.24 0 0 1 14.25 17ZM24 23.54a3.25 3.25 0 1 1 3.25-3.25A3.26 3.26 0 0 1 24 23.54Zm9.75 0A3.25 3.25 0 1 1 37 20.29a3.26 3.26 0 0 1-3.25 3.25Z"/></svg></h1>
			
				<input class="form-control" type="email" placeholder="Email" />
                <input class="form-control" type="email" placeholder="Nom" />
				<input class="form-control" type="email" placeholder="Sujet" />
                <textarea class="form-control" name="" id="" cols="30" rows="6" placeholder="votre message"></textarea>
               
				<button class="mes-ico">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M17.187 19.181L24 4.755L0 12.386l9.196 1.963l.043 4.896l2.759-2.617l-2.147-2.076l7.336 4.63z"/></svg>		
                </button>
            </form>
            
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h3>
                        <b>Informations de contact</b>
                    </h3>
                    <div>

					<p>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 100 100"><path fill="currentColor" d="M50.002 0C33.524 0 20 13.48 20 29.922c0 6.372 2.04 12.31 5.48 17.174l-.123-.192l19.205 33.198l.098.127c.774 1.01 1.54 1.824 2.467 2.437c.927.613 2.114 1 3.28.883c2.33-.234 3.684-1.844 4.935-3.54l.078-.105L76.594 43.87l.017-.03c.507-.915.874-1.838 1.188-2.732A29.578 29.578 0 0 0 80 29.922C80 13.48 66.48 0 50.002 0Zm0 5C63.756 5 75 16.218 75 29.922a24.55 24.55 0 0 1-1.84 9.332l-.025.062l-.022.065c-.263.757-.549 1.444-.879 2.04L51.275 77.087c-.928 1.222-1.575 1.51-1.367 1.488c.107-.01.206.074-.023-.078c-.219-.144-.666-.57-1.196-1.246L29.63 44.3l-.066-.093C26.689 40.147 25 35.23 25 29.922C25 16.219 36.248 5 50.002 5zm0 7.85c-9.462 0-17.115 7.626-17.115 17.072c0 9.446 7.654 17.072 17.115 17.072c9.461 0 17.111-7.627 17.111-17.072c0-9.446-7.65-17.072-17.111-17.072zm0 5c6.817 0 12.111 5.285 12.111 12.072c0 6.787-5.293 12.072-12.111 12.072c-6.818 0-12.115-5.286-12.115-12.072c0-6.787 5.298-12.072 12.115-12.072z" color="currentColor"/><path fill="currentColor" d="m63.848 73.354l-1.383 1.71c1.87.226 3.68.491 5.375.812l-5.479 1.623l7.313 1.945l5.451-1.719c3.348 1.123 7.984 2.496 9.52 4.057h-10.93l1.086 3.176h11.342c-.034 1.79-3.234 3.244-6.29 4.422l-7.751-1.676l-7.303 2.617l7.8 1.78c-4.554 1.24-12.2 1.994-18.53 2.341l-.266-3.64h-7.606l-.267 3.64c-6.33-.347-13.975-1.1-18.53-2.34l7.801-1.781l-7.303-2.617l-7.752 1.676c-3.012-.915-6.255-2.633-6.289-4.422H25.2l1.086-3.176h-10.93c1.536-1.561 6.172-2.934 9.52-4.057l5.451 1.719l7.313-1.945l-5.479-1.623a82.552 82.552 0 0 1 5.336-.807l-1.363-1.713c-14.785 1.537-27.073 4.81-30.295 9.979C.7 91.573 19.658 99.86 49.37 99.989c.442.022.878.006 1.29 0c29.695-.136 48.636-8.42 43.501-16.654c-3.224-5.171-15.52-8.445-30.314-9.981z" color="currentColor"/></svg>    
                    Commune de Rabat,Avenue <br> Mohammed Bel Hassane<br>El Ouzzani
                        Hay <br>Nahda 1,Rabat
                    </p>
                    </div>
                    <div>

                    <p>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M14.608 12.172c0 .84.239 1.175.864 1.175c1.393 0 2.28-1.775 2.28-4.727c0-4.512-3.288-6.672-7.393-6.672c-4.223 0-8.064 2.832-8.064 8.184c0 5.112 3.36 7.896 8.52 7.896c1.752 0 2.928-.192 4.727-.792l.386 1.607c-1.776.577-3.674.744-5.137.744c-6.768 0-10.393-3.72-10.393-9.456c0-5.784 4.201-9.72 9.985-9.72c6.024 0 9.215 3.6 9.215 8.016c0 3.744-1.175 6.6-4.871 6.6c-1.681 0-2.784-.672-2.928-2.161c-.432 1.656-1.584 2.161-3.145 2.161c-2.088 0-3.84-1.609-3.84-4.848c0-3.264 1.537-5.28 4.297-5.28c1.464 0 2.376.576 2.782 1.488l.697-1.272h2.016v7.057h.002zm-2.951-3.168c0-1.319-.985-1.872-1.801-1.872c-.888 0-1.871.719-1.871 2.832c0 1.68.744 2.616 1.871 2.616c.792 0 1.801-.504 1.801-1.896v-1.68z"/></svg>
                        contact@rabatcapitale.ma
                    </p>
                    </div>
                    <div>

                    <p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z"/></svg>
                        05 37 65 61 36 / 05 37 75 42 94
                    </p>
                    </div>
                    <div>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="currentColor" d="M61.144 41.448c-.24-1.247-1.509-2.257-2.748-2.257h-.009l-.386-3.859l-1.415-13.385c-.128-1.193-1.294-2.17-2.589-2.17h-.886V2H19.777v17.777h-3.465c-1.296 0-2.461.977-2.591 2.17l-.965 8.941h-1.197c-.408-.891-1.185-1.696-2.107-1.922c-.84-.2-1.679-.301-2.518-.301s-1.678.101-2.517.301c-1.392.34-2.472 1.998-2.415 3.281c.333 8.327.362 16.653.087 24.98c-.101 2.377 1.799 4.454 4.355 4.721V62h51.951c1.239 0 2.508-1.013 2.748-2.26a49.24 49.24 0 0 0 .001-18.292M9.782 57.312c.027.643-.22 1.272-.695 1.773A2.975 2.975 0 0 1 6.954 60c-.848-.008-1.619-.333-2.171-.915c-.476-.501-.723-1.131-.694-1.792c.274-8.345.245-16.798-.089-25.134c-.017-.388.478-1.148.881-1.247c.683-.163 1.374-.246 2.053-.246s1.37.083 2.043.244c.414.101.908.861.891 1.258a345.062 345.062 0 0 0-.086 25.144m43.329-35.535h.886c.336 0 .588.272.6.38l1.182 11.175h-2.667V21.777zM21.777 4h29.334v29.332h-4.32c-.219-1.902-1.948-3.443-3.884-3.443H29.981c-1.935 0-3.664 1.542-3.883 3.443h-4.321V4m24.667 35.777h-1.07l-.629-6.193c-.091-.887-.933-1.635-1.838-1.635H29.981c-.905 0-1.747.748-1.838 1.635l-.628 6.193h-1.071l.641-6.301c.146-1.428 1.445-2.588 2.896-2.588h12.926c1.452 0 2.752 1.16 2.897 2.588l.64 6.301M15.709 22.163c.012-.111.265-.386.603-.386h3.465v11.555h-5.273l1.205-11.169m43.47 37.199c-.055.286-.487.638-.783.638H15.427c-.296 0-.729-.352-.782-.632a47.016 47.016 0 0 1-.001-17.542c.055-.285.487-.635.784-.635h42.969c.297 0 .729.35.782.628a47.084 47.084 0 0 1 0 17.543"/><path fill="currentColor" d="M23.444 6.443h26v2.223h-26zm0 4.446h26v2.223h-26zm0 4.444h26v2.222h-26zm0 6.667h26v2.221h-26zm0 4.443h13v2.223h-13zM33.569 42H17.098c-.973 0-1.765.83-1.765 1.852v7.406c0 1.021.792 1.854 1.765 1.854H33.57c.972 0 1.764-.832 1.764-1.854v-7.406C35.333 42.83 34.541 42 33.569 42m.588 9.258a.603.603 0 0 1-.588.617H17.098a.603.603 0 0 1-.588-.617v-7.406c0-.34.264-.617.588-.617H33.57c.324 0 .588.277.588.617v7.406z"/><path fill="currentColor" d="M26.444 44.221h-7.777c-.611 0-1.111.502-1.111 1.111v1.111c0 .611.5 1.111 1.111 1.111h7.777c.611 0 1.111-.5 1.111-1.111v-1.111a1.114 1.114 0 0 0-1.111-1.111m6.112 1.111h-3.333a.557.557 0 0 0-.556.557V47c0 .305.249.555.556.555h3.333c.306 0 .556-.25.556-.555v-1.111a.559.559 0 0 0-.556-.557m18.778-1.111h3.333c.306 0 .556-.25.556-.555v-1.111a.557.557 0 0 0-.556-.555h-3.333a.557.557 0 0 0-.556.555v1.111c0 .305.249.555.556.555m-29.89 4.445h-3.333a.557.557 0 0 0-.556.555v1.111c0 .307.249.557.556.557h3.333c.306 0 .556-.25.556-.557v-1.111a.557.557 0 0 0-.556-.555m11.112 0h-3.333a.557.557 0 0 0-.556.555v1.111c0 .307.249.557.556.557h3.333c.306 0 .556-.25.556-.557v-1.111a.558.558 0 0 0-.556-.555m-5.556 0h-3.333a.557.557 0 0 0-.556.555v1.111c0 .307.249.557.556.557H27c.306 0 .556-.25.556-.557v-1.111a.557.557 0 0 0-.556-.555"/><circle cx="32" cy="57.555" r="2.223" fill="currentColor"/><circle cx="53" cy="47.555" r="1.111" fill="currentColor"/><circle cx="17.556" cy="57.555" r="1.111" fill="currentColor"/><circle cx="22" cy="57.555" r="1.111" fill="currentColor"/><circle cx="26.444" cy="57.555" r="1.111" fill="currentColor"/><circle cx="38.524" cy="56.617" r="1.111" fill="currentColor"/><circle cx="42.969" cy="56.617" r="1.111" fill="currentColor"/><circle cx="47.413" cy="56.617" r="1.111" fill="currentColor"/><circle cx="38.524" cy="52.523" r="1.111" fill="currentColor"/><circle cx="42.969" cy="52.523" r="1.111" fill="currentColor"/><circle cx="47.413" cy="52.523" r="1.111" fill="currentColor"/><circle cx="38.524" cy="48.43" r="1.111" fill="currentColor"/><circle cx="42.969" cy="48.43" r="1.111" fill="currentColor"/><circle cx="47.413" cy="48.43" r="1.111" fill="currentColor"/><circle cx="38.524" cy="44.336" r="1.111" fill="currentColor"/><circle cx="42.969" cy="44.336" r="1.111" fill="currentColor"/><circle cx="47.413" cy="44.336" r="1.111" fill="currentColor"/><path fill="currentColor" d="M57.444 50.889c-.909 0-1.688.547-2.032 1.33l-.001-.002a2.058 2.058 0 0 0-.13.404c-.22.48-.586.49-1.17.49a3.332 3.332 0 1 0 3.333 3.332c0-.58.009-.939.48-1.166c.149-.033.293-.082.431-.145c.004 0 .007-.002.012-.004h-.002a2.223 2.223 0 0 0 1.302-2.018a2.222 2.222 0 0 0-2.223-2.221m-3.333 7.777a2.222 2.222 0 1 1 0-4.446a2.223 2.223 0 0 1 0 4.446m3.333-4.445a1.11 1.11 0 1 1 0-2.22a1.11 1.11 0 1 1 0 2.22"/></svg>
                            05 37 63 10 84
                        </p>
                    </div>

				</div>

			</div>
		</div>
	</div>
</div>
<section class="content">

<div class="bgcont">
    <hr>
    <div class="rest">
        <h1>RESTONS EN CONTACT !</h1>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ajouter Votre Adresse ici" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button style="background-color:#b44000;" class="btn text-light" type="button">Envoyer</button>
            </div>
        </div>
        <div class="soci">
            <svg xmlns="http://www.w3.org/2000/svg"  aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g fill="currentColor"><path d="M16-.034C7.159-.034-.035 7.158-.035 16S7.159 32.034 16 32.034S32.035 24.842 32.035 16S24.841-.034 16-.034zm0 31C7.748 30.966 1.035 24.252 1.035 16S7.748 1.034 16 1.034S30.965 7.748 30.965 16S24.252 30.966 16 30.966z"/><path d="M19.5 7h-2.668C13.434 6.966 13 9.069 13 11.345V13h-1.5a.445.445 0 0 0-.5.5v3a.445.445 0 0 0 .5.5H13v7.5a.449.449 0 0 0 .503.5h3.055c.295.034.534-.205.44-.5L17 17h2.5a.445.445 0 0 0 .5-.5v-3a.445.445 0 0 0-.5-.5h-2.503L17 11.5c.097-.639.097-.535.69-.5h1.789c.139-.031.287-.014.391-.115c.104-.101.164-.239.129-.385v-3A.444.444 0 0 0 19.5 7zm-.535 2.944l-1.254-.048c-1.553 0-1.683.843-1.683 1.706l-.004 1.896a.534.534 0 0 0 .534.535H19v1.932h-2.44a.535.535 0 0 0-.535.534L16.024 24H14v-7.5c0-.295-.201-.534-.497-.534H12v-1.932h1.503a.534.534 0 0 0 .378-.156c.1-.101.118-.237.118-.379v-2.155c0-2.242.453-3.31 2.832-3.31h2.133v1.91z"/></g></svg>
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M43.112 14.394a5.006 5.006 0 0 0-3.533-3.533c-2.314-.894-24.732-1.332-31.236.025A5.006 5.006 0 0 0 4.81 14.42c-1.045 4.583-1.124 14.491.026 19.177a5.006 5.006 0 0 0 3.533 3.533c4.583 1.055 26.371 1.203 31.236 0a5.006 5.006 0 0 0 3.533-3.533c1.114-4.993 1.193-14.287-.026-19.203Z"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M30.567 23.995L20.12 18.004v11.982Z"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><g fill="currentColor"><path d="M16-.034C7.159-.034-.035 7.158-.035 16S7.159 32.034 16 32.034S32.035 24.842 32.035 16S24.841-.034 16-.034zm0 31C7.748 30.966 1.035 24.252 1.035 16S7.748 1.034 16 1.034S30.965 7.748 30.965 16S24.252 30.966 16 30.966z"/><path d="M24.794 11.046a3.73 3.73 0 0 0 .273-.643a.535.535 0 0 0-.781-.623a6.033 6.033 0 0 1-1.646.673a3.831 3.831 0 0 0-2.562-.987a3.82 3.82 0 0 0-3.814 3.973a8.821 8.821 0 0 1-5.735-3.178a.536.536 0 0 0-.876.07a3.813 3.813 0 0 0-.066 3.721a.628.628 0 0 0-.214.078a.571.571 0 0 0-.264.481c0 1.135.505 2.177 1.319 2.885l-.035.035a.534.534 0 0 0-.108.518a3.816 3.816 0 0 0 2.184 2.365a6.134 6.134 0 0 1-3.406.579a.545.545 0 0 0-.566.352a.536.536 0 0 0 .215.63a9.841 9.841 0 0 0 5.319 1.559c6.18 0 9.874-5.02 9.874-9.873l-.001-.164a7.122 7.122 0 0 0 1.541-1.66a.535.535 0 0 0-.651-.791zm-1.745 1.755a.535.535 0 0 0-.222.461c.006.132.009.266.009.398c0 4.328-3.293 8.805-8.804 8.805a8.76 8.76 0 0 1-2.887-.488a7.073 7.073 0 0 0 3.045-1.39a.535.535 0 0 0-.32-.955a2.752 2.752 0 0 1-2.194-1.162c.253-.017.501-.059.742-.124a.534.534 0 0 0-.036-1.04a2.741 2.741 0 0 1-2.081-1.905c.266.067.539.106.812.115c.235-.001.453-.145.526-.371s-.013-.475-.212-.607a2.746 2.746 0 0 1-1.143-2.945a9.883 9.883 0 0 0 6.568 2.972c.176.001.33-.062.437-.191s.148-.3.11-.464a2.75 2.75 0 0 1 4.682-2.506a.535.535 0 0 0 .494.159c.165-.033.328-.071.489-.115a2.538 2.538 0 0 1-.226.151a.535.535 0 0 0 .338.988l.182-.023a5.605 5.605 0 0 1-.309.237z"/></g></svg>
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


<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

<script>
                     var map = L.map('map').setView([ 33.971588,-6.849813], 13);
                    
                  
                    
   

                         var osm= L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        })
                        osm.addTo(map);
                     
                     
                       var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                            maxZoom: 20,
                            subdomains:['mt0','mt1','mt2','mt3']
                        });
                                                
                         
                        googleStreets.addTo(map);
                    
                
                    </script>
                    
      
</body>
</html>