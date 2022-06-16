$(document).on("scroll", function() {
    var pageTop = $(document).scrollTop();
    var pageBottom = pageTop + $(window).height();
    var tags = $(".tag");
  
    for (var i = 0; i < tags.length; i++) {
      var tag = tags[i];
  
      if ($(tag).position().top < pageBottom) {
        $(tag).addClass("visible");
      } else {
        $(tag).removeClass("visible");
      }
    }
  });
  
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

var slideIndex =0;
showSlide();
var timer = setInterval(showSlide,2000);
function showSlide(){
    var i;
    var slides=document.getElementsByClassName('slide-item');
    var dots = document.getElementsByClassName('dot');
    for(var i=0;i<slides.length;i++){
        slides[i].style.display='none';
    }
    for(var i=0;i<dots.length;i++){
        dots[i].className=dots[i].className.replace("dot-active"," ");
    }
    slideIndex++;
    if(slideIndex>slides.length) slideIndex=1;
    slides[slideIndex-1].style.display="block";
    dots[slideIndex-1].className +=" dot-active";
}
var slideContainer=document.getElementById('slideshow-container');
var slideControl = document.getElementById('slide-control');
// slideContainer.onmouseover=function(){
//     clearInterval(timer);
// }
// slideContainer.onmouseleave=function(){
//     timer=setInterval(showSlide,2000);
// }

function chooseSlide(n){
    slideIndex=n;
    showSlide();
    clearInterval(timer);
}
function showMenu(){
    var topNav = document.getElementById('topnav');
    if(topNav.className === "navbar"){
        topNav.className += " show";
    }else{
        topNav.className = "navbar";
    }
}

function showMenuLang(){
  
    let lang = document.getElementById('all-lang');
    console.log(lang.className);
    if(lang.className === "all-l"){
      
            lang.className += " disp";
      
    }else{
     
        lang.className="all-l";
    }
    console.log(lang.className);

}
let nums=document.querySelectorAll(".num");
let numeros=document.querySelectorAll(".numero");
let section = document.querySelector(".statistique");
let propos = document.querySelector("#topnav");
let start=false;
let started=false;
function startCount(el){
    
    let goal = el.dataset.goal;
    let count=setInterval(()=>{
        el.textContent++;
        if(el.textContent==goal){
            clearInterval(count);
        }
    }, 0.5);

}
function startCountst(el){
    
    let goal = el.dataset.goal;
    let count=setInterval(()=>{
        el.textContent++;
        if(el.textContent==goal){
            clearInterval(count);
        }
    }, 80);

}
const navbar = document.getElementById('topnav');
window.onscroll = () => {
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled');
        if (window.scrollY <= section.offsetTop) {
            if(!started){
            nums.forEach(element => {
                startCountst(element);
                
            }); 
            }
                started=true;}
        if(window.scrollY >= propos.offsetTop){
            if(!start){
                numeros.forEach(element => {
                    startCount(element);
                    
                }); 
                }
                    start=true;}            
        

    } else {
        navbar.classList.remove('scrolled');
    }
};

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
