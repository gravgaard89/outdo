<?php
    
    //Private and Group Bools
    $private = false;
    $group = false;

    //Booking
    $service = $_POST['service'];
    $persons = $_POST['persons'];
    $date = $_POST['date'];
    $sessions = $_POST['sessions'];

    //Sessions
    $sd1 = $_POST['sd1'];
    $ft1 = $_POST['ft1'];
    $tt1 = $_POST['tt1'];

    $sd2 = $_POST['sd2'];
    $ft2 = $_POST['ft2'];
    $tt2 = $_POST['tt2'];
    
    $sd3 = $_POST['sd3'];
    $ft3 = $_POST['ft3'];
    $tt3 = $_POST['tt3'];
    
    $sd4 = $_POST['sd4'];
    $ft4 = $_POST['ft4'];
    $tt4 = $_POST['tt4'];
    
    $sd5 = $_POST['sd5'];
    $ft5 = $_POST['ft5'];
    $tt5 = $_POST['tt5'];    
    
    //Contact Details
    $cName = $_POST['cname'];
    $cPhone = $_POST['cphone'];
    $cMail = $_POST['cmail'];

    //Participants
    $pn1 = $_POST['pn1'];
    $pa1 = $_POST['pa1'];
    $pl1 = $_POST['pl1'];
    $pd1 = $_POST['pd1'];

    $pn2 = $_POST['pn2'];
    $pa2 = $_POST['pa2'];
    $pl2 = $_POST['pl2'];
    $pd2 = $_POST['pd2'];

    $pn3 = $_POST['pn3'];
    $pa3 = $_POST['pa3'];
    $pl3 = $_POST['pl3'];
    $pd3 = $_POST['pd3'];

    $pn4 = $_POST['pn4'];
    $pa4 = $_POST['pa4'];
    $pl4 = $_POST['pl4'];
    $pd4 = $_POST['pd4'];

    $pn5 = $_POST['pn5'];
    $pa5 = $_POST['pa5'];
    $pl5 = $_POST['pl5'];
    $pd5 = $_POST['pd5'];


    if (strpos($service, "Group") !== false || strpos($service, "Kids") !== false) {
        $group = true;
        $private = false;
    } else {
        $group = false;
        $private = true; 
    }

    echo  "<h1>Booking request</h1>";
    echo  $service; 
    echo "<br>";
    
    if ($persons == 1) {
        echo $persons . " person"; 
        echo "<br>";
    } else {
        echo $persons . " persons"; 
        echo "<br>";
    }
    
    if ($sessions == 1) {
        echo $sessions . " session"; 
        echo "<br>";
    } else if ($sessions > 1){
        echo $sessions . " sessions"; 
        echo "<br>";
    }

    if ($group) {
        echo "Date: " . $date;
        echo "<br>";
    } 

    if ($private) {

        if($sessions > 0) {
            echo $sd1 . "" . $ft1 . " - " . $tt1; 
            echo "<br>";
        }

        if($sessions > 1) {
            echo $sd2 . "    " . $ft2 . " - " . $tt2; 
            echo "<br>";
        }

        if($sessions > 2) {
            echo $sd3 . "    " . $ft3 . " - " . $tt3; 
            echo "<br>";
        }
        
        if($sessions > 3) {
            echo $sd4 . "    " . $ft4 . " - " . $tt4; 
            echo "<br>";
        }

        if($sessions > 4) {
            echo $sd5 . "    " . $ft5 . " - " . $tt5;
        }

        //set Participants days to 0
        $pd1 = "";
        $pd2 = "";
        $pd3 = "";
        $pd4 = "";
        $pd5 = "";

    } 

    echo "<h1>Contact details</h1>";
    echo $cName;
    echo "<br>";
    echo $cPhone;
    echo "<br>";
    echo $cMail;

    echo "<h1>Participants</h1>";

    if($persons > 0 ){
        echo $pn1;
        echo "<br>";
        echo $pa1;
        echo "<br>";
        echo $pl1;
        echo "<br>";
        echo $pd1;
        echo "<br>";
    }
    
    if($persons > 1 ){
        echo "<br>";
        echo $pn2;
        echo "<br>";
        echo $pa2;
        echo "<br>";
        echo $pl2;
        echo "<br>";
        echo $pd2;
        echo "<br>";
    }

    if($persons > 2 ) {
        echo "<br>";
        echo $pn3;
        echo "<br>";
        echo $pa3;
        echo "<br>";
        echo $pl3;
        echo "<br>";
        echo $pd3;
        echo "<br>";
    }

    if($persons > 3 ) {
        echo "<br>";
        echo $pn4;
        echo "<br>";
        echo $pa4;
        echo "<br>";
        echo $pl4;
        echo "<br>";
        echo $pd4;
        echo "<br>";
    }

    if($persons > 4 ) {
        echo "<br>";
        echo $pn5;
        echo "<br>";
        echo $pa5;
        echo "<br>";
        echo $pl5;
        echo "<br>";
        echo $pd5;
        echo "<br>";
    }

    echo "<h1>Thank you for the request</h1> <p>We will get back to you within 3-4 working days to confirm the booking</p>"


    // send email
    mail("admin@outdo.at","Booking", $service);
?>
