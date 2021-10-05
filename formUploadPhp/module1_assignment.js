

function validate() {
    let fname = document.getElementById('fname').value;
    let lname = document.getElementById('lname').value;
    let gender = document.getElementById('gender').value;
    // let mail = document.getElementById('email').value;
    let month = document.getElementById('month').value;
    let day = document.getElementById('day').value;
    let year = document.getElementById('year').value;
    let height = document.getElementById('height').value;
    let weight = document.getElementById('weight').value;
    let reason = document.getElementById('reason').value;

    // var mailformat = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   
    if (gender == '') {
        document.getElementById("ErrGender").innerHTML = "Please select gender";
  
    }
    if(fname == ''){
        document.getElementById("ErrfName").innerHTML="Please enter your first name";
    }

    if(lname == ''){
        document.getElementById("ErrlName").innerHTML = "Please enter your last name";

    }
     if (month == '') {
        document.getElementById("ErrMonth").innerHTML = "Please select month";

    }
    if (day == '') {
        document.getElementById("ErrDay").innerHTML = "Please select day";

    }
    if (year == '') {
        document.getElementById("ErrYear").innerHTML = "Please select year";

    }
    if (isNaN(height) ) {
        document.getElementById("ErrHeight").innerHTML = "Please enter height in cm";

    }
    if (isNaN(weight)) {
        document.getElementById("ErrWeight").innerHTML = "Please enter weight in kg";

    }
    // if(input.value.match(mailformat)){
    //     document.getElementById("ErrMail").innerHTML = "Please enter your email id";
    // }
    if(reason == ''){
        document.getElementById("ErrReason").innerHTML = "Please enter your reason to see a doctor";
    }


    if(fname !== "" && lname!=="" && reason !== ""){
        nextPage();
    }
}


function historyAlert() {

    let drugAL = document.getElementById('allergies').value;
    let otherIllness = document.getElementById('otherIllness').value;

    let list = [];

    var markedbox = document.querySelectorAll('input[type="checkbox"]:checked');

    for (var checkbox of markedbox) {
        
        list += 'Have you ever had : ' + checkbox.value +'\n';

    }

    if(drugAL == '')
    document.getElementById("ErrDrug").innerHTML = "you have to enter drug allergies";
      
    
    if(otherIllness == '')
    document.getElementById("ErrOther").innerHTML="Enter other illness";

    if(otherIllness !== "")
    finalPage();   

}


function habitsAlert() {

    let history = document.getElementById('history').value;

    if(history !== "")
        document.getElementById("ErrHistory").innerHTML = "Enter your history of medication"; 
 
}

function nextPage(){
    document.getElementById('page1').style.display = "none";
    document.getElementById('page2').style.display = "block";
}
function finalPage(){

    document.getElementById('page2').style.display = "none";
    document.getElementById('finalPage').style.display = "block";
}
function previous(){
    document.getElementById('page2').style.display = "block";
    document.getElementById('finalPage').style.display = "none";
}
function previous2(){
    document.getElementById('page1').style.display = "block";
    document.getElementById('page2').style.display = "none";
}




