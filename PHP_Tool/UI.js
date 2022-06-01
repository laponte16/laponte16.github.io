var show = 0;


function onButton(){
    if(document.getElementById("fiveOne").innerHTML === "CAUTION"){
        alert("jaja");
    }
    if(show == 0){document.getElementById("mainTable").style.visibility = "visible"; show = 1;}
    else{document.getElementById("mainTable").style.visibility = "hidden"; show = 0;}
    
    
}