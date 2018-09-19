var lesson = {
    type: "",
    gear: "",
    size: 0,
    date: "",
};

var person = {};

var session = {};

var help = document.getElementById("text").innerHTML;

function  hideOrShowDays() {
    
    if (lesson.type == "Private") {
        for (i = 1; i <= 5; i++) {
        document.getElementById("days-div" + i).style.display = "none";
        }
    } else {
        for (i = 1; i <= 5; i++) {
            document.getElementById("days-div" + i).style.display = "block";
        }
    }
    
}

function setType() {
    var service = document.getElementById("service").value;
    var datediv = document.getElementById("datediv");
    var sessionsdiv = document.getElementById("sessionsdiv");
    document.getElementById("print-service").innerHTML = service;
    
    if (service == "Kids Ski School") {
        lesson.type = "Group";
        lesson.gear = "Ski";
    }
    
    if (service == "Private Ski Lesson") {
        lesson.type = "Private";
        lesson.gear = "Ski";
    }
    
    if (service == "Private Snowboard Lesson") {
        lesson.type = "Private";
        lesson.gear = "Snowboard";
    }
    
    if (lesson.type == "Group") {

        datediv.style.display = "block";
        sessionsdiv.style.display = "none";
        
        
        document.getElementById("pft1").innerHTML = "10:00";
        document.getElementById("pft2").innerHTML = "10:00";
        document.getElementById("pft3").innerHTML = "10:00";
        document.getElementById("pft4").innerHTML = "10:00";
        document.getElementById("pft5").innerHTML = "10:00";
        
        document.getElementById("ptt1").innerHTML = "15:00";
        document.getElementById("ptt2").innerHTML = "15:00";
        document.getElementById("ptt3").innerHTML = "15:00";
        document.getElementById("ptt4").innerHTML = "15:00";
        document.getElementById("ptt5").innerHTML = "15:00";
        
        document.getElementById("print-sessions").style.display = "none";
        document.getElementById("sessions-header").innerHTML = "Days of ski school";
    }
    
    if (lesson.type == "Private") {
        document.getElementById('date').required = false;
        datediv.style.display = "none";
        sessionsdiv.style.display = "block";
        document.getElementById("sessions-header").innerHTML = "Sessions"
        
        document.getElementById("pft1").innerHTML = "";
        document.getElementById("pft2").innerHTML = "";
        document.getElementById("pft3").innerHTML = "";
        document.getElementById("pft4").innerHTML = "";
        document.getElementById("pft5").innerHTML = "";
        
        document.getElementById("ptt1").innerHTML = "";
        document.getElementById("ptt2").innerHTML = "";
        document.getElementById("ptt3").innerHTML = "";
        document.getElementById("ptt4").innerHTML = "";
        document.getElementById("ptt5").innerHTML = "";
        
        document.getElementById("psd1").innerHTML = "";
        document.getElementById("psd2").innerHTML = "";
        document.getElementById("psd3").innerHTML = "";
        document.getElementById("psd4").innerHTML = "";
        document.getElementById("psd5").innerHTML = ""; 
        
        
        document.getElementById("print-sessions").style.display = "block";
    }
    
    hideOrShowDays();
    
}

function setPersons() {
    var persons = document.getElementById("persons").value;
    lesson.size = persons;
    document.getElementById("print-size").innerHTML = persons + " persons";
    
    for (i = 1; i <= persons; i++) {
        document.getElementById("p" + i).style.display = "block";
        
        person[i] = {
            name: "",
            age: 0,
            level: "",
            days: ""
        };
    }

    for (j = 5; j > persons; j--) {
        document.getElementById("p" + j).style.display = "none";
        delete person[j];
        document.getElementById("pn" + j).innerHTML = "";
        document.getElementById("pa" + j).innerHTML = "";
        document.getElementById("pl" + j).innerHTML = "";
        document.getElementById("pd" + j).innerHTML = "";
    }

    if (lesson.size == 1) {
        document.getElementById("print-size").innerHTML = persons + " person";
        document.getElementById("participants-header").innerHTML = "Participant";
    } else {
        document.getElementById("print-size").innerHTML = persons + " persons";
        document.getElementById("participants-header").innerHTML = "Participants";
    }

}

function setSessions() {
    var sessions = document.getElementById("sessions").value;
    lesson.sessions = sessions;
    
    document.getElementById("print-sessions").style.display = "block";
    document.getElementById("print-sessions").innerHTML = sessions + " sessions";
    
    for (i = 1; i <= lesson.sessions; i++) {
        document.getElementById("s" + i).style.display = "block";
        session[i] = {
            date: "",
            fTime: "09:00",
            tTime: "11:00"
        };
        
    }
    
    for (j = 5; j > lesson.sessions; j--) {
        document.getElementById("s" + j).style.display = "none";
        delete session[j];
    }

    if(sessions == 1){
        document.getElementById("sessions-header").innerHTML = "Session";
    } else {
        document.getElementById("sessions-header").innerHTML = "Sessions";
    }

    
}

function setDate() {  
    var inputDate = document.getElementById("date").value;


    var date = new Date(inputDate);
    lesson.date = date;
    lesson.sessions = "";


    document.getElementById("psd1").innerHTML = "Sunday " + date.getDate() + "." + date.getMonth() + "." + date.getFullYear();
    document.getElementById("psd2").innerHTML = "Monday " + (date.getDate() + 1) + "." + date.getMonth() + "." + date.getFullYear();
    document.getElementById("psd3").innerHTML = "Tueday " + (date.getDate() + 2) + "." + date.getMonth() + "." + date.getFullYear();
    document.getElementById("psd4").innerHTML = "Wednesday " + (date.getDate() + 3) + "." + date.getMonth() + "." + date.getFullYear();
    document.getElementById("psd5").innerHTML = "Thursday " + (date.getDate() + 4) + "." + date.getMonth() + "." + date.getFullYear();
 

}


function setContactDetails() {
    cname = document.getElementById("contact-name").value;
    cphone = document.getElementById("contact-phone").value;
    cmail = document.getElementById("contact-email").value;

    document.getElementById("print-name").innerHTML = cname;
    document.getElementById("print-phone").innerHTML = cphone;
    document.getElementById("print-email").innerHTML = cmail;

    contact = {name: cname, phone: cphone, email: cmail}
}

function setName() {

    for(i = 1; i <= lesson.size; i++) {
       person[i].name = document.getElementById("n" + i).value;
       document.getElementById("pn" + i).innerHTML = person[i].name;
    }
    
}

function setAge() {

    for(i = 1; i <= lesson.size; i++) {
       person[i].age = document.getElementById("a" + i).value;
       document.getElementById("pa" + i).innerHTML = person[i].age;
    }

}

function setLevel() {
    for(i = 1; i <= lesson.size; i++) {
        person[i].level = document.getElementById("l" + i).value;
        document.getElementById("pl" + i).innerHTML = person[i].level;
     }

}

function setDays() {
    
    for (i = 1; i <= lesson.size; i++) {
        if (lesson.type == "Group") {
            alert("Group");
            if (document.getElementById("r" + i).checked) {
                person[i].days = "3 days";
            } else {
                person[i].days = "5 days"
            }
            document.getElementById("pd" + i).innerHTML = person[i].days;
        } else if (lesson.type == "Private") {
            delete person[i].days;
            document.getElementById("pd" + i).innerHTML = "";
            document.getElementById("days-header").innerHTML = "";
        }
        
    }
    
}

function setSessionDate() {
    
    for(i = 1; i <= lesson.sessions; i++) {
        session[i].date = document.getElementById("sd" + i).value;
        document.getElementById("psd" + i).innerHTML = session[i].date; 
    }

    for(i = 5; i > lesson.sessions; i--) { 
        delete session[i];
        document.getElementById("psd" + i).innerHTML = "";
    }


} 

function setFromTime() {

    for(i = 1; i <= lesson.sessions; i++) {
        session[i].fTime = document.getElementById("ft" + i).value;
        document.getElementById("pft" + i).innerHTML = session[i].fTime; 
    }

    for(i = 5; i > lesson.sessions; i--) { 
        delete session[i];
        document.getElementById("pft" + i).innerHTML = "";
    }

    

} 

function setToTime() {

    for(i = 1; i <= lesson.sessions; i++) {
        session[i].tTime = document.getElementById("tt" + i).value;
        document.getElementById("ptt" + i).innerHTML = session[i].tTime; 
    }

    for(i = 5; i > lesson.sessions; i--) { 
        delete session[i];
        document.getElementById("ptt" + i).innerHTML = "";
    }

} 


function next() {
    var back_btn = document.getElementById("back_btn");

    var step1 = document.getElementById("step1");
    var step2 = document.getElementById("step2");
    var step3 = document.getElementById("step3");
    var step4 = document.getElementById("step4");
    var step5 = document.getElementById("step5");

    if (step1.style.display != "none" && lesson.type == "Group" && lesson.size != "" && lesson.date != "" || step1.style.display != "none" && lesson.type == "Private" && lesson.size != "" && lesson.sessions != "") {
        //alert("Contact details is shown");
        step1.style.display = "none";
        step2.style.display = "block";
        back_btn.style.display = "block";
        document.getElementById('text').innerHTML = "Please provide your contact details so we can get back to you!";
    }  else if (step2.style.display == "block") {
        //alert("From step 2 to step 3");
        setContactDetails()
        step2.style.display = "none";
        step3.style.display = "block";
        document.getElementById('text').innerHTML = "Who will be joining in on the fun?";
    }  else if (step3.style.display == "block" && lesson.type == "Private") {
        //alert("From step 3 to step 4");
        step3.style.display = "none";
        step4.style.display = "block";
        document.getElementById('text').innerHTML = "When would you like to have your lessons?";
    }  else if (step3.style.display == "block" && lesson.type == "Group") {
        //alert("From step 3 to step 5");
        setDays();
        step3.style.display = "none";
        step5.style.display = "block";
        document.getElementById('text').innerHTML = "Great! Now we just need you to confirm the booking request!";
    }  else if (step4.style.display == "block") {
        //alert("From step 3 to step 4");
        setSessionDate();
        setFromTime();
        setToTime();
        step4.style.display = "none";
        step5.style.display = "block";
        
        document.getElementById('text').innerHTML = "Great! Now we just need you to confirm the booking request!"
    }  else {
        alert("Please fill out the form");
    }
    
}

function back() {
    var back_btn = document.getElementById("back_btn");

    var step1 = document.getElementById("step1");
    var step2 = document.getElementById("step2");
    var step3 = document.getElementById("step3");
    var step4 = document.getElementById("step4");

    if (step2.style.display == "block") {
        step2.style.display = "none";
        step1.style.display = "block";
        back_btn.style.display = "none";
        document.getElementById('text').innerHTML = "Looking for a way to Outdo yourself? Type in your criterias to book the lesson of a lifetime";
       //alert("From step 2 to step 1");

    } else if (step3.style.display == "block") {
        step3.style.display = "none";
        step2.style.display = "block"; 
        document.getElementById('text').innerHTML = "Please provide your contact details so we can get back to you!";
        //alert("From step 3 to step 2");
    } else if (step4.style.display == "block") {
        step4.style.display = "none";
        step3.style.display = "block"; 
        document.getElementById('text').innerHTML = "Who will be joining in on the fun?";
        
        //alert("From step 3 to step 2");
    } else if (step5.style.display == "block" && lesson.type == "Group") {
        step5.style.display = "none";
        step3.style.display = "block"; 
        //alert("From step 4 to step 2");
    } else if (step5.style.display == "block" && lesson.type == "Private") {
        step5.style.display = "none";
        step4.style.display = "block"; 
        document.getElementById('text').innerHTML = "When would you like to have your lessons?";
        //alert("From step 4 to step 3");
    } 

    
}