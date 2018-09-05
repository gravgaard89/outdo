
var lesson = {type: "", gear: "", size: 0, sessions: "", date: "", fTime: "", tTime: ""};

var person = {name: "", age: 0, level: ""};

function setType() {
    var service = document.getElementById("service").value;
    var datediv = document.getElementById("datediv");
    var sessionsdiv = document.getElementById("sessionsdiv");
    
    if(service == "Kids Ski School") {
        lesson.type = "Group";
        lesson.gear = "Ski";
    }
    
    if(service == "Private Ski Lesson") {
        lesson.type = "Private";
        lesson.gear = "Ski";
    }
    
    if(service == "Private Snowboard Lesson") {
        lesson.type = "Private";
        lesson.gear = "Snowboard";
    }

    if(service == "") {
        lesson.type = "";
        lesson.gear = "";
    }

    if(lesson.type == "Group") {
        datediv.style.display = "block";
        sessionsdiv.style.display = "none";
    }

    if(lesson.type == "Private") {
        datediv.style.display = "none";
        sessionsdiv.style.display = "block";
    }
}

function setPersons() {
    var persons = document.getElementById("persons").value;
    
    lesson.size = persons;

    for(i = 1; i <= persons; i++) {
        document.getElementById("p" + i).style.display = "block";
        
    }

    for(j = 10; j > persons; j--) {
        document.getElementById("p" + i).style.display = "none";
    }

}

function setSessions() {
    var sessions = document.getElementById("sessions").value;

    lesson.sessions = sessions;
    lesson.date = "";
}

function setDate() {
    var date = document.getElementById("date").value;

    lesson.date = date;
    lesson.sessions = "";
}





function next() {
    var step1 = document.getElementById("step1");
    //STEP 1    
    //Kids Ski School is selected and the rest is not null
    if (lesson.type != "" && lesson.size != "" && (lesson.sessions != "" || lesson.date != "")  ) {
        step1.style.display = "none";
        step2.style.display = "block";
    } else  {
        alert("Please fill out the form");
    }


}

function back() {
    var step2 = document.getElementById("step2");

    if (step2.style.display = "block") {
        step2.style.display = "none";
        step1.style.display = "block";
    }
}