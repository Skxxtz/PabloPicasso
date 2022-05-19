const Reiter1 = document.getElementById("li1")
const Reiter2 = document.getElementById("li2")
const Reiter3 = document.getElementById("li3")
const Reiter4 = document.getElementById("li4")
const main = document.getElementById("main")
const main2 = document.getElementById("main2")
const main3 = document.getElementById("main3")
const Upload = document.getElementById("Upload")
const Files = document.getElementById("Upload")
const ButtonFiles = document.getElementById("ButtonFiles")
const q_response = document.getElementById("q_response")

var Reiter=[Reiter1, Reiter2, Reiter3, Reiter4]
function select(x){
    for(i=0;i<Reiter.length;i++){
        Reiter[i].classList.remove("focused")
        if(Reiter[i]==document.getElementById(x)){
            if(Reiter[i]==Reiter1){
                if(window.location.href.indexOf("#Dashboard")>-1){} else{window.location ="#Dashboard"}
                Upload.className ="Upload inactive"
                main2.className = "main2 inactive"
                main.innerHTML="<div id='grid'><div class='gridCont'onclick='Bilder()' onclick='pic()'><p>Bilder hinzufügen</p></div><div onclick='res()' class='gridCont' ><p>Ergebnisse überprüfen</p></div><div class='gridCont' onclick='konto()'><p>Kontoinformationen</p></div></div>"
            }
            else if(Reiter[i]==Reiter2){
                if(window.location.href.indexOf("#Pinnwand")>-1){} else{window.location ="#Pinnwand"}

                main2.className = "main2 inactive"
                Upload.className ="Upload active"
                main.innerHTML="<div id='grid2'><div class='Pinn_Img' id=''></div><div class='Pinn_Img'id=''></div><div class='Pinn_Img'id=''></div><div class='Pinn_Img'id=''></div><div class='Pinn_Img'id=''></div><div class='Pinn_Img'id=''></div></div>"
            }
            else if(Reiter[i]==Reiter3){
                if(window.location.href.indexOf("#Account")>-1){} else{window.location ="#Account"}
                main.innerHTML=""
                main2.className = "main2 active"
                Upload.className ="Upload inactive"
                
                
            }
            else if(Reiter[i]==Reiter4){
                if(window.location.href.indexOf("#Fragen")>-1){} else{window.location ="#Fragen"}
                main2.className = "main2 inactive"
                Upload.className ="Upload inactive"
                main.innerHTML="<div id='question' onclick='question_own()'>+<p class='inactive'id='explanation'>Eine eigene Frage stellen.</p></div><div class='questions_q' id='q_response'></div>"
                loadDoc()
            }
        } 
    }
    document.getElementById(x).classList.add("focused")
}
function Upload_Function(){
    ButtonFiles.click()
}




window.onhashchange = hash
window.onload = hash

function hash(){
    if(window.location.href.indexOf("#Dashboard")>-1){
        select("li1")
    } else if(window.location.href.indexOf("#Pinnwand")>-1){
        select("li2")
    } else if(window.location.href.indexOf("#Account")>-1){
        select("li3")
    } else if(window.location.href.indexOf("#Fragen")>-1){
        
        select("li4")
        
    } else if(window.location.href.indexOf("#Upload")>-1){
        Upload.className ="Upload inactive"
        main.innerHTML="<div class='frame'><img src='' alt=''></div><div id='drop-area' class='drop'>Drag over here.<form action='file_upload.php' method='POST' enctype='multipart/form-data'><label id='Fileupload'><input type='file' id='File'  multiple accept='image/*' onchange='Upload_Function()' name='file[]'><div id='ButtonFile'>Klicke hier</div><button type='submit' id='ButtonFiles' class='inactive' name='submit'></button></label></form></div>"
    } else if(window.location.href.indexOf("#Frage_Stellen")>-1){
        Upload.className ="Upload inactive"
        main.innerHTML= "<form action='post_questions.php' method='POST' id='post_quest'><input type='text' name='Topic' id='input_topic' placeholder='Titel'><textarea  id='input_content' cols='30' rows='10' placeholder='Deine Frage:' ></textarea><input type='textfield' name='Content' id='input_content_submit' style='display:none'><div class='button' onclick='send_question()' id='fake_submit'>Abschicken</div><input type='submit' class='inactive' id='input_submit' style='opacity:0;'></form>"
    } 
    if(history.previous){
        select("li1")
    }
}



/* Drag Event*/
let dropArea = document.getElementById('drop-area')





/*Fragen*/ 
var explanation = document.getElementById("explanation")
var question = document.getElementById("question")



function question_own(){
    document.location = "#Frage_Stellen"
    
}



function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const q_response = document.getElementById("q_response")
            q_response.innerHTML=this.responseText
            
       }
    };
    xhttp.open("GET", "questions.php", true);
    xhttp.send();
}
function send_question(){
    const input_content = document.getElementById("input_content")
    const input_content_submit = document.getElementById("input_content_submit")
    const input_submit = document.getElementById("input_submit")
    input_content_submit.value = input_content.value
    input_submit.className = ""
    input_submit.click()
}
function konto(){
    select('li3')
}
function Bilder(){
    document.location ="#Upload"
}

