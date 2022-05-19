if(window.location.href.indexOf("index.php")> -1 ){



var c;
function Photographer(){
	logo1.classList.remove("start")
	logo1.classList.add("active")
	logo1.classList.remove("inactive")
	c = setTimeout(PhotographerOut, 7000)
}
function PhotographerOut(){
	logo1.classList.add("inactive")
	logo1.classList.remove("active")
	c = setTimeout(Designer, 1500)
}
function Designer(){
	logo2.classList.remove("start")
	logo2.classList.add("active")
	logo2.classList.remove("inactive")
	c = setTimeout(DesignerOut, 6000)
}
function DesignerOut(){
	logo2.classList.add("inactive")
	logo2.classList.remove("active")
	c = setTimeout(Influencer, 1500)
}
function Influencer(){
	logo3.classList.remove("start")
	logo3.classList.add("active")
	logo3.classList.remove("inactive")
	c = setTimeout(InfluencerOut, 6500)
}
function InfluencerOut(){
	logo3.classList.add("inactive")
	logo3.classList.remove("active")
	c = setTimeout(Photographer, 1500)
}
Photographer()


const email = document.getElementById("email")
const password = document.getElementById("password")
const hr1 = document.getElementById("hr1")
const hr2 = document.getElementById("hr2")




email.onfocus = function(){
	hr1.style.transition ="0.8s ease"
	hr1.style.width=170+"px"
}

email.onblur = function(){
	if(email.value == ""){
		hr1.style.transition ="0.2s ease"
		hr1.style.width=0+"px" 
		}
	
}
password.onfocus = function(){
	hr2.style.transition ="0.8s ease"
	hr2.style.width=170+"px"
}

password.onblur = function(){
		if(password.value == ""){
		hr2.style.transition ="0.2s ease"
		hr2.style.width=0+"px" 
		}
		
	
}

}
if(window.location.href.indexOf("registration")> -1){
	const reg_name =document.getElementById("reg_name")
const reg_prename=document.getElementById("reg_prename")
const reg_email=document.getElementById("reg_email")
const reg_password=document.getElementById("reg_password")
const reg_repeatpwd=document.getElementById("reg_repeat_pwd")
const reg_birthday=document.getElementById("reg_birthday")
const reg_hr1 = document.getElementById("reg_hr1")
const reg_hr2 = document.getElementById("reg_hr2")
const reg_hr3 = document.getElementById("reg_hr3")
const reg_hr4 = document.getElementById("reg_hr4")
const reg_hr5 = document.getElementById("reg_hr5")
const reg_hr6 = document.getElementById("reg_hr6")
const path = document.getElementById("path")

var form =[reg_prename,reg_name,reg_email,reg_birthday,reg_password,reg_repeatpwd]
var hr = [reg_hr1,reg_hr2,reg_hr3,reg_hr4,reg_hr5,reg_hr6]




}

if(window.location.href.indexOf("?")> -1){
	if(window.location.href.indexOf("registration.php")> -1){
	path.classList.remove("active")
	path.classList.add("inactive")}
} else{
	path.classList.remove("active")
	path.classList.remove("inactive")
	path.classList.add("active")

}

function line(x){
	hr[x-1].style.transition ="0.8s ease"
	hr[x-1].style.width=170+"px"
}
function lineout(x){
	if(form[x-1].value == ""){
	hr[x-1].style.transition ="0.2s ease"
	hr[x-1].style.width=0+"px" 
	}

}  