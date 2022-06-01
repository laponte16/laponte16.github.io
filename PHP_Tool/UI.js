var show = 0;


function onButton(){
    if(document.getElementById("fiveOne").textContent.trim() == "CAUTION"){
        actionCheck(0);
    }
    else{
        actionCheck(1);
    }

    if(show == 0){document.getElementById("mainTable").style.visibility = "visible"; show = 1;}
    else{document.getElementById("mainTable").style.visibility = "hidden"; show = 0;}
    
    
}

function actionCheck(control){
    if(control == 0){
        document.getElementById("twoOne").style.backgroundColor = "rgb(221, 203, 153)";
        document.getElementById("btn2").style.backgroundColor = "rgb(221, 203, 153)";
        document.getElementById("twoFour").style.backgroundColor = "rgb(221, 203, 153)";
        document.getElementById("threeThree").style.backgroundColor = "rgb(221, 203, 153)";
        document.getElementById("fourThree").style.backgroundColor = "rgb(221, 203, 153)";
        document.getElementById("fiveOne").style.backgroundColor = "rgb(221, 182, 75)"; 
        document.getElementById("fiveTwo").style.backgroundColor = "rgb(221, 182, 75)";  
    }
    else{
        document.getElementById("twoOne").style.backgroundColor = "LightGreen";
        document.getElementById("btn2").style.backgroundColor = "LightGreen";
        document.getElementById("twoFour").style.backgroundColor = "LightGreen";
        document.getElementById("threeThree").style.backgroundColor = "LightGreen";
        document.getElementById("fourThree").style.backgroundColor = "LightGreen";
        document.getElementById("fiveOne").style.backgroundColor = "Green"; 
        document.getElementById("fiveTwo").style.backgroundColor = "Green";
    }
}