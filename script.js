const front = document.getElementById("Front")
const content = document.getElementById("Content")
const arrow_click = document.getElementById("arrow_click")
const l_Email = document.getElementById("l_Email")
const l_Passwort = document.getElementById("l_Passwort")
const r_Email = document.getElementById("r_Email")
const r_Passwort = document.getElementById("r_Passwort")
const login_section = document.getElementById("login_section")
const loginTxt = document.getElementsByClassName("loginTxt")
const user = document.getElementById("user")
const cb = document.getElementById("cb")
const reg_birthday = document.getElementById("reg_birthday")
const window_height = window.innerHeight
const window_width = window.innerWidth






//Window Events
window.onload = hash
window.onscroll = op
window.onresize= newWindow_Size






//Eventlistener
arrow_click.onclick = function scroll(){   
    scrollPos(1)
}


function newWindow_Size(){
    const window_height = window.innerHeight
    const window_width = window.innerWidth
    if(window.location.href.includes("#registration")){
       registrate("auto") 
    }
}
function op(){
    
    if(window.location.href.indexOf("#") > -1){}
    else{window.sessionStorage.setItem("scroll", window.pageYOffset)}

        if(window.pageYOffset < 0.125 * window_height){
            arrow_click.style.transition = "0.5s ease"
            arrow_click.style.opacity = 1
        } else if( window.pageYOffset > 0.125 * window_height){
            arrow_click.style.transition = "0.2s ease"
            arrow_click.style.opacity = 0
        } 
        if(window.pageYOffset > 2.5 * window_height){
            for(i=0;i<6;i++){
                loginTxt[i].style.animation="20s appear forwards"
                loginTxt[i].style.animationDelay= (i-1) * 0.5 +"s"}
        } else if(window.pageYOffset <  3.2 * window_height ){
            for(i=0;i<6;i++){
                loginTxt[i].style.animation=""
                }
        }
    
        
    
}
function hash(){ 
    if(window.location.href.indexOf("index.php") > -1){
        if(window.location.href.indexOf("#") > -1){}
        else{
            var scroll=window.sessionStorage.getItem("scroll")
            window.scrollTo({
            top: scroll,
            left: 0,
            behavior: 'smooth'
          })}
        
    }
    if(window.location.href.indexOf("Agb") > -1){textbody("Agb")}
    if(window.location.href.indexOf("Kontakt") > -1){textbody("Kontakt")}
    if(window.location.href.indexOf("Datenschutz") > -1){textbody("Datenschutz")}
    if(window.location.href.indexOf("Widerruf") > -1){textbody("Widerruf")}
    if(window.location.href.indexOf("Impressum") > -1){textbody("Impressum")}
    if(window.location.href.indexOf("Cookies") > -1){textbody("Cookies")}
    if(window.location.href.includes("registration")){registrate('auto')}
    if(window.location.href.includes("3")){console.log("abg")}
}






//Registration
function registrate(x){
    
    disableScroll()
    window.scrollTo({
        top:window_height * 3 ,
        left: window_width,
        behavior: x
    })
    
}

window.onkeypress =function(){
        if(reg_birthday.value.length == 2 ){
            reg_birthday.value += "."
        } else if(reg_birthday.value.length == 5 ){
            reg_birthday.value += "."
            }
}  






//Scrolling
function scrollPos(x,y){
    if(y == ""){
        var y = 'smooth'
    }
    window.scrollTo({
        top: x * window_height,
        left: 0,
        behavior: y
      });


}






//Prevent Scrolling
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};
function preventDefault(e) {
  e.preventDefault();
}
function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}
var supportsPassive = false;
try {
  window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
    get: function () { supportsPassive = true; } 
  }));
} catch(e) {}
var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';
function disableScroll() {
  window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
  window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
  window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
  window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}
function enableScroll() {
  window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
  window.removeEventListener('touchmove', preventDefault, wheelOpt);
  window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}
function keyallow(){
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}
function keydisable(){
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}




