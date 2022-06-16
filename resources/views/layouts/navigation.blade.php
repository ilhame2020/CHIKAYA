<nav>
        <ul class="haut-contact">
            <svg  height="30px" width="20px"  class="call" style="background:no-repeat url({{URL::to('images/call.svg')}});"></svg>

            <li class="el-haut-contact">              +212 (0) 809 101 112  </li>
            <svg  height="30px" width="20px"  class="email" style="background:no-repeat url({{URL::to('images/email.svg')}});"></svg>
            <li class="el-haut-contact"> contact@chikaya.ma</li>
            <hr>
        </ul>
    <div class="nav-container" style="height:100px;">

    <ul class="nav-acc">
        <div id="topnav" class="navbar">
            <a href="#" class="logo">
    
                <img src="{{ URL::to('images/commune.png')}}" height="100px" width="62x" alt="" class="logo-nav">

            </a>
            <div class="navbar-right menu" style="top:30px;">
                <a href="/" class="active">
                    Accueil
                </a>
                <a style="color:white;" class="active">
                    "       "
                </a>
                <div  class="lang" style=" position:relative; top:0;
                        width:inherit;
                        color: black;
                        cursor: pointer;">
                        <a class="active"   onclick="showMenuLang()">
                        Services
                        <i class="fa fa-angle-down"></i>
                        </a>
                        <ul id="all-lang" class="all-l" style="
                            width: 24%;
                            left: 20rem;
                            position: absolute;
                            top: 56px;
                            ">
                                <li  class="ss-nav sous-lang">
                                    <a href="/soumission-reclamation" >
                                    soumission d'une réclamation
                                    </a>
                                </li>    
                                <li  class="ss-nav sous-lang">
                                    <a href="/suivre-reclamation" >
                                    suivie d'une réclamation
                                    </a>
                                </li>  
                                <li  class="ss-nav sous-lang">
                                    <a href="/soumission-proposition" >
                                    soumission d'une proposition
                                    </a>
                                </li>  
                            </ul>
                </div>
                <a href="#statistique" class="active">
                    Statistiques
                </a>
                <a href="/contact" class="active">
                Contact
                </a>
                <!-- <div id="lang" class="lang">
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
                    </ul> -->
        </div>

     
        <div class="navbar-right">
            
        </div>    
        <div class="navbar-right">
            <a  class="icon" onclick="showMenu()" >
                <i class="fa fa-bars"></i>
            </a>
        </div>
        </ul>    
    </div>
  
 
</nav>
            <!-- <button class="but" >
                <a class="el-nav-acc">Accueil</a>
            </button>
            <div class="dropdown">
                <button class="but dropdown" id="dropbtn" onmouseover="openDrop()" >
                <div class="el-nav-acc" id="services">
                    <a class="link"style="display: block;width: 80%;margin: 0;">Services</a> <svg  height="30px" width="10%"  class="arrow">

                    </svg>
                   
                </div>
                <div class="dropdown-menu" id="dropdown-menu">
                    dropdown conten
                    
                    
                </div> 
                </button>
                
            </div>
            <button class="but" >
                <a class="el-nav-acc">Statistiques</a>
            </button>
            <button class="but" >
                <a class="el-nav-acc">Contact</a>
           
            </button> -->
    <script src="{{ asset('js/script.js') }}"></script>
