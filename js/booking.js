var lesson = {
    type: "",
    gear: "",
    size: 0,
    sessions: "",
    date: "",
    fTime: "",
    tTime: ""
};

var person = {};

/*
var person = {
    name: "",
    age: 0,
    level: ""
};
*/

function setType() {
    var service = document.getElementById("service").value;
    var datediv = document.getElementById("datediv");
    var sessionsdiv = document.getElementById("sessionsdiv");

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

    if (service == "") {
        lesson.type = "";
        lesson.gear = "";
    }

    if (lesson.type == "Group") {
        datediv.style.display = "block";
        sessionsdiv.style.display = "none";
    }

    if (lesson.type == "Private") {
        datediv.style.display = "none";
        sessionsdiv.style.display = "block";
    }
}

function setPersons() {
    var persons = document.getElementById("persons").value;

    lesson.size = persons;

    for (i = 1; i <= persons; i++) {
        document.getElementById("p" + i).style.display = "block";

        person[i] = {
            name: "",
            age: 0,
            level: ""
        };

    }

    for (j = 5; j > persons; j--) {
        document.getElementById("p" + j).style.display = "none";
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

function setName() {
    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;
    var n3 = document.getElementById("n3").value;
    var n4 = document.getElementById("n4").value;
    var n5 = document.getElementById("n5").value;


    person[1].name = n1;
    person[2].name = n2;
    person[3].name = n3;
    person[4].name = n4;
    person[5].name = n5;
}

function setAge() {
    var a1 = document.getElementById("a1").value;
    var a2 = document.getElementById("a2").value;
    var a3 = document.getElementById("a3").value;
    var a4 = document.getElementById("a4").value;
    var a5 = document.getElementById("a5").value;

    person[1].age = a1;
    person[2].age = a2;
    person[3].age = a3;
    person[4].age = a4;
    person[5].age = a5;
}

function setLevel() {
    var l1 = document.getElementById("l1").value;
    var l2 = document.getElementById("l2").value;
    var l3 = document.getElementById("l3").value;
    var l4 = document.getElementById("l4").value;
    var l5 = document.getElementById("l5").value;

    person[1].level = l1;
    person[2].level = l2;
    person[3].level = l3;
    person[4].level = l4;
    person[5].level = l5;
}




function next() {
    var step1 = document.getElementById("step1");
    //STEP 1    
    //Kids Ski School is selected and the rest is not null
    if (lesson.type != "" && lesson.size != "" && (lesson.sessions != "" || lesson.date != "")) {
        step1.style.display = "none";
        step2.style.display = "block";
    } else {
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