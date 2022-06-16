<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumission d'une Proposition</title>
    <link rel="shortcut icon" href="{{ URL::to('images/commune.png')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Document</title>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/quasar@1.5.11/dist/quasar.min.css'>
</head>
<style>
      *{
        box-sizing: content-box;
    }
    .inp-form{
        margin-left: 30px;
    margin-top: 5px;
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
    height: 40vh;
    width: 100%;
    }
    .sous-lang a{
        
        background-color: white;
    }
    footer{
        display:flex;
    }
    .inp-form{
        width:94%;
    }
    .content{
  
  width: 100%;
    margin: 0;
  height: 250vh;
  position: absolute;
  color: black;


  }
  .bgcont{

    
height: 70%;
background: url(http://localhost:8000/images/bgcont.png);
background-repeat: no-repeat;


background-size: contain;
background-position: bottom;
background-color: white;

}
footer{
    height:30%;
}
@media screen and (max-width:600px){
    

    .logo-f{
        margin:0;
    }
        
    .content {
            width: 100%;
            margin: 0;
            height: 594vh;
            position: absolute;
            color: black;
        }
    .bgcont{
            height:50%;
        }
    footer{
        height:49.5%;
    }        

    .all-l{
        width: inherit;
        left: 13rem;
        position: absolute;
        top: 142px;
    }}
</style>
<script>
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
<section class="content">
<div class="bgcont">
<div class="head-rec">
            <h1>SOUMISSION D'UNE PROPOSITION</h1>
            
            <p>Accueil</p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><circle cx="16" cy="16" r="8" fill="currentColor"/></svg><p>Soumission d'une Proposition</li>
            </p>
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
            <div>
                    <label class="lab-form phone form-step-active">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2S7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"/></svg>
                      <input  class="inp-form" placeholder="Nom Complet" type="text" name="" id="">
                      </label>
                    <label class="lab-form" style=" padding-top: 6px;">

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
                          <script src='https://cdn.jsdelivr.net/npm/quasar@1.5.11/dist/quasar.umd.min.js'></script><script  src="{{ asset('js/script22.js') }}"></script>
                          
                    </label>
                    <label class="lab-form" id="textar">
                      
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M32.33 6a2 2 0 0 0-.41 0h-28a2 2 0 0 0-.53.08l14.45 14.39Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="m33.81 7.39l-14.56 14.5a2 2 0 0 1-2.82 0L2 7.5a2 2 0 0 0-.07.5v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-.12-.61ZM5.3 28H3.91v-1.43l7.27-7.21l1.41 1.41Zm26.61 0h-1.4l-7.29-7.23l1.41-1.41l7.27 7.21Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                        <input  class="inp-form" placeholder="Objet" type="text" name="" id="">
                    </label>
                       
                    <label class="lab-form" id="textar">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"/></svg>

                        <textarea  class="inp-form" placeholder="Texte" name="" id="" cols="5" rows="5"></textarea>
                    </label>
                    <label class="lab-form" id="fich" style="cursor: pointer;">
                     
                        <svg  xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120s53.8 120 120 120s120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88s39.5-88 88-88s88 39.5 88 88z"/></svg>
                        <label  for="frstimg">
                            <input type="file" name=""  id="fileupload"  multiple="multiple">
                            <div id="dvPreview">
                            </div>
                        </label>
                        <span id="fichier" ></span>
                    </label>
                   
                
                   
           
            </div>
            <div class="contact">
     
            <div class="button"><a href="">Envoyer</a></div>
            </div>
           

    </form>
</div>
@include('layouts.footer')

   </section>
    
</body>
</html>