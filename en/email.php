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
    echo  $service . "<br>"; 
    
    if ($persons == 1) {
        echo $persons . " person <br>"; 
    } else {
        echo $persons . " persons <br>"; 
    }
    
    if ($sessions == 1) {
        echo $sessions . " session <br>"; 
    } else if ($sessions > 1){
        echo $sessions . " sessions <br>"; 
    }

    if ($group) {
        echo "Date: " . $date . "<br>";
    } 

    if ($private) {

        if($sessions > 0) {
            echo $sd1 . "" . $ft1 . " - " . $tt1 . "<br>"; 
        }

        if($sessions > 1) {
            echo $sd2 . "    " . $ft2 . " - " . $tt2 . "<br>"; 
        }

        if($sessions > 2) {
            echo $sd3 . "    " . $ft3 . " - " . $tt3 . "<br>"; 
        }
        
        if($sessions > 3) {
            echo $sd4 . "    " . $ft4 . " - " . $tt4 . "<br>"; 
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
    echo $cName . "<br>";
    echo $cPhone . "<br>";
    echo $cMail . "<br>";

    echo "<h1>Participants</h1>";

    if($persons > 0 ) {
        echo $pn1 . "<br>";
        echo $pa1 . "<br>";
        echo $pl1 . "<br>";
        echo $pd1 . "<br><br>"; 
    }
    
    if($persons > 1 ) {
        echo $pn2 . "<br>";
        echo $pa2 . "<br>"; 
        echo $pl2 . "<br>"; 
        echo $pd2 . "<br><br>";
    }

    if($persons > 2 ) {
        echo $pn3 . "<br>";
        echo $pa3 . "<br>"; 
        echo $pl3 . "<br>";
        echo $pd3 . "<br><br>";
    }

    if($persons > 3 ) {
        echo $pn4 . "<br>";
        echo $pa4 . "<br>";
        echo $pl4 . "<br>";
        echo $pd4 . "<br><br>";
    }

    if($persons > 4 ) {
        echo $pn5 . "<br>";
        echo $pa5 . "<br>";
        echo $pl5 . "<br>";
        echo $pd5 . "<br><br>";
    }

    echo "<h1>Thank you for the request</h1> <p>We will get back to you within 3-4 working days to confirm the booking</p>";
    
    







/////////////////////////////////////////////////////////////////////////






    echo  "<h1>Booking request</h1>";
    echo  $service . "<br>"; 
    
    if ($persons == 1) {
        echo $persons . " person <br>"; 
    } else {
        echo $persons . " persons <br>"; 
    }
    
    if ($sessions == 1) {
        echo $sessions . " session <br>"; 
    } else if ($sessions > 1){
        echo $sessions . " sessions <br>"; 
    }

    if ($group) {
        echo "Date: " . $date . "<br>";
    } 

    if ($private) {

        if($sessions > 0) {
            echo $sd1 . "" . $ft1 . " - " . $tt1 . "<br>"; 
        }

        if($sessions > 1) {
            echo $sd2 . "    " . $ft2 . " - " . $tt2 . "<br>"; 
        }

        if($sessions > 2) {
            echo $sd3 . "    " . $ft3 . " - " . $tt3 . "<br>"; 
        }
        
        if($sessions > 3) {
            echo $sd4 . "    " . $ft4 . " - " . $tt4 . "<br>"; 
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


/////////////////////////////////////////////////////////////////////////

    $to = "admin@outdo.at";
    $subject = "$service";

    //the message     
    
    $eHeader = "<h1>Booking request</h1> From: " . $cName . "<br>" . $service . "<br>" . $persons . " Persons <br>";

    if($group) {
        $eDate = "Date: " . $date;
    }

    if($private) {
        $eSessions = "<br><h1>Sessions</h1>";
        
        if($sessions > 0) {
            $eSessions .= $sd1 . "" . $ft1 . " - " . $tt1 . "<br>"; 
        }

        if($sessions > 1) {
            $eSessions .= $sd2 . "    " . $ft2 . " - " . $tt2 . "<br>"; 
        }

        if($sessions > 2) {
            $eSessions .= $sd3 . "    " . $ft3 . " - " . $tt3 . "<br>"; 
        }
        
        if($sessions > 3) {
            $eSessions .= $sd4 . "    " . $ft4 . " - " . $tt4 . "<br>"; 
        }

        if($sessions > 4) {
            $eSessions .= $sd5 . "    " . $ft5 . " - " . $tt5;
        }

        //set Participants days to 0
        $pd1 = "";
        $pd2 = "";
        $pd3 = "";
        $pd4 = "";
        $pd5 = "";
    } else {
        $eSessions = "";
    }

    $eContact = "<br><h1>Contact details</h1>" . $cName . "<br>" . $cPhone . "<br>" .  $cMail;

    $eParticipants = "<br><h1>Participants</h1>";
    if($persons > 0 ) {
        $eParticipants .= $pn1 . "<br>" . $pa1 . "<br>" . $pl1 . "<br>" . $pd1 . "<br><br>"; 
    }
    
    if($persons > 1 ) {
        $eParticipants .= $pn2 . "<br>" . $pa2 . "<br>" . $pl2 . "<br>" . $pd2 . "<br><br>"; 
    }

    if($persons > 2 ) {
        $eParticipants .= $pn3 . "<br>" . $pa3 . "<br>" . $pl3 . "<br>" . $pd3 . "<br><br>"; 
    }

    if($persons > 3 ) {
        $eParticipants .= $pn4 . "<br>" . $pa4 . "<br>" . $pl4 . "<br>" . $pd4 . "<br><br>"; ;
    }

    if($persons > 4 ) {
        $eParticipants .= $pn5 . "<br>" . $pa5 . "<br>" . $pl5 . "<br>" . $pd5 . "<br><br>"; 
    }
    

    

    $message = $eHeader  . $eContact . $eParticipants . $eSessions; 

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    //$headers .= $cMail . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";

    $result = mail($to,$subject,$message,$headers);
    var_dump($result);
    
    
?>
