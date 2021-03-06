<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="group snowboard lesson in Zell am See">
    <meta name="description" content="Improve your skills, may it be snow plough turns, carving turns or technique for powder or moguls, you are on the right spot, our professional instructors will be there for you.">

    <title>Book a lesson</title>

    <!-- Custom CSS -->
    <link rel="shortcut icon" type="image/png" href="https://outdo.at/ill/favicon_ski.png" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="../css/booking.css">
    <link rel="stylesheet" type="text/css" href="../css/w3.css">
    <link rel="stylesheet" type="text/css" href="../css/global.css">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</head>

<body  id="booking" style="background-image: linear-gradient(#e3e9f5, #bcc4d2)">
    <!-- Logo -->
    <div class="center" style="padding-top: 20px;">
        <a href="https://outdo.at/"><img src="https://outdo.at/ill/outdo_logo_black.png"></a>
    </div>

    <h1 id="header">Book a Lesson</h1>
    <p id="text">Looking for a way to Outdo yourself?<br>Type in your criterias to book the lesson of a lifetime</p>


    <form action="email.php" method="post">
    
    <!-- JUMBOBAR
    <section id="jumbobar">
        <h4>Product</h4>
        <div class="row-three" style="position: relative";>
        <img src="../ill/skier.png" style="position: absolute; z-index:1; height: 120px; bottom: 0; left: 0; margin-left: -80px;">
            <div class="third">
                <div class="input-group">
                    <select id="service" onchange="setType()" onchange name="service">
                        <option></option>
                        <option>Kids Ski School</option>
                        <option>Private Ski Lesson</option>
                        <option>Private Snowboard Lesson</option>
                    </select>
                    <label>Lesson type</label>
                </div>
            </div>
            <div class="third">
                <div class="input-group">
                    <select id="persons" onchange="setPersons()" name="persons">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <label>Persons</label>
                </div>
            </div>
            <div class="third" id="sessionsdiv">
                <div class="input-group">
                    <select id="sessions" onchange="setSessions()" name="sessions">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <label>Sessions</label>
                </div>
            </div>
            <div class="third" id="datediv">
                <div class="input-group">
                    <input autocomplete="off" id="date" class="sundaypicker" onchange="setDate()" name="date">
                    <label>Date</label>
                </div>
            </div>
        </div>
    </section>
    -->
    
    <!-- STEP 1 -->
    <section id="step1">
        <h4>Product</h4>
        <div class="row-three">
            <div class="third">
                <div class="input-group">
                    <select id="service" onchange="setType()" onchange name="service">
                        <option></option>
                        <option>Kids Ski School</option>
                        <option>Private Ski Lesson</option>
                        <option>Private Snowboard Lesson</option>
                    </select>
                    <label>Lesson type</label>
                </div>
            </div>
            <div class="third">
                <div class="input-group">
                    <select id="persons" onchange="setPersons()" name="persons">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <label>Persons</label>
                </div>
            </div>
            <div class="third" id="sessionsdiv">
                <div class="input-group">
                    <select id="sessions" onchange="setSessions()" name="sessions">
                        <option></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <label>Sessions</label>
                </div>
            </div>
            <div class="third" id="datediv">
                <div class="input-group">
                    <input autocomplete="off" id="date" class="sundaypicker" onchange="setDate()" name="date">
                    <label>Date</label>
                </div>
            </div>
        </div>
    </section>

    <!-- STEP 2 -->
    <section id="step2">
        <h4>Contact details</h4>
        <div class="row-three">
            <div class="third">
                <div class="input-group">
                    <input type="text" id="contact-name" name="cname">    
                    <label>Name</label>
                </div>
            </div>
            <div class="third">
                <div class="input-group">
                    <input type="tel" id="contact-phone" name="cphone">    
                    <label>Phone</label>
                </div>
            </div>
            <div class="third" id="sessionsdiv">
                <div class="input-group">
                    <input type="email" id="contact-email" name="cmail">    
                    <label>Email</label>
                </div>
            </div>
        </div>
    </section>
    
    <!-- STEP 3 --> 
    <section id="step3" class="w3-animate-opacity">

        <div id="p1">
            <h4 style="margin-top: 0; padding-top: 0;">Participant 1</h4>
            <div class="row-three">
                <div class="third">
                    <div class="input-group">
                        <input type="text" id="n1" onchange="setName()" name="pn1">
                        <label>Name</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <input type="number" id="a1" onchange="setAge()" name="pa1">
                        <label>Age</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <select id="l1" onchange="setLevel()" name="pl1">
                            <option value=""></option>
                            <option value="Beginner">Beginner</option>
                            <option value="Recreational">Recreational</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <label>Skiing Level</label>
                    </div>
                </div>
                <div class="" id="days-div1">
                    <div class="radio">
                        <table>
                            <td>
                                <label class="container">3 days
                                    <input type="radio" id="r1" checked="checked" value="3 days" name="pd1">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <label class="container">5 days
                                    <input type="radio" value="5 days" name="pd1">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="p2">
            <h4>Participant 2</h4>
            <div class="row-three">
                <div class="third">
                    <div class="input-group">
                        <input type="text" id="n2" onchange="setName()" name="pn2">
                        <label>Name</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <input type="num" id="a2" onchange="setAge()" name="pa2">
                        <label>Age</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <select id="l2" onchange="setLevel()" name="pl2">
                            <option value=""></option>
                            <option value="Beginner">Beginner</option>
                            <option value="Recreational">Recreational</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <label>Skiing Level</label>
                    </div>
                </div>
                <div class="" id="days-div2">
                    <div class="radio">
                        <table>
                            <td>
                                <label class="container">3 days
                                    <input type="radio" id="r2" checked="checked" value="3 days" name="pd2">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <label class="container">5 days
                                    <input type="radio" value="5 days" name="pd2">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="p3">
            <h4>Participant 3</h4>
            <div class="row-three">
                <div class="third">
                    <div class="input-group">
                        <input type="text" id="n3" onchange="setName()" name="pn3">
                        <label>Name</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <input type="num" id="a3" onchange="setAge()" name="pa3">
                        <label>Age</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <select id="l3" onchange="setLevel()" name="pl3">
                            <option value=""></option>
                            <option value="Beginner">Beginner</option>
                            <option value="Recreational">Recreational</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <label>Skiing Level</label>
                    </div>
                </div>
                <div class="" id="days-div3">
                    <div class="radio">
                        <table>
                            <td>
                                <label class="container">3 days
                                    <input type="radio" id="r3" checked="checked" value="3 days" name="pd3">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <label class="container">5 days
                                    <input type="radio" value="5 days" name="pd3">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="p4">
            <h4>Participant 4</h4>
            <div class="row-three">
                <div class="third">
                    <div class="input-group">
                        <input type="text" id="n4" onchange="setName()" name="pn4">
                        <label>Name</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <input type="num" id="a4" onchange="setAge()" name="pa4">
                        <label>Age</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <select id="l4" onchange="setLevel()" name="pl4">
                            <option value=""></option>
                            <option value="Beginner">Beginner</option>
                            <option value="Recreational">Recreational</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <label>Skiing Level</label>
                    </div>
                </div>
                <div class="" id="days-div4">
                    <div class="radio">
                        <table>
                            <td>
                                <label class="container">3 days
                                    <input type="radio" id="r4" checked="checked" value="3 days" name="pd4">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <label class="container">5 days
                                    <input type="radio" value="5 days" name="pd4">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="p5">
            <h4>Participant 5</h4>
            <div class="row-three">
                <div class="third">
                    <div class="input-group">
                        <input type="text" id="n5" onchange="setName()" name="pn5">
                        <label>Name</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <input type="num" id="a5" onchange="setAge()" name="pa5">
                        <label>Age</label>
                    </div>
                </div>
                <div class="third">
                    <div class="input-group">
                        <select id="l5" onchange="setLevel()" name="pl5">
                            <option value=""></option>
                            <option value="Beginner">Beginner</option>
                            <option value="Recreational">Recreational</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <label>Skiing Level</label>
                    </div>
                </div>
                <div class="" id="days-div5">
                    <div class="radio">
                        <table>
                            <td>
                                <label class="container">3 days
                                    <input type="radio" id="r5" checked="checked" value="3 days" name="pd5">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>
                                <label class="container">5 days
                                    <input type="radio" value="5 days" name="pd5">
                                    <span class="checkmark"></span>
                                </label>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!-- STEP 4 -->
    <section id="step4" class="w3-animate-opacity">

        <div id="sessionsSection">

            <div id="s1">
                <h4>Session 1</h4>
                <div class="row-three">
                    <div class="third">
                        <div class="input-group">
                            <input type="text" id="sd1" class="datepicker" name="sd1">
                            <label>Date</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="ft1" onchange="setFromTime()" name="ft1">
                                <option></option>
                                <option>09:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                            </select>
                            <label>From</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="tt1" onchange="setToTime()" name="tt1">
                                <option></option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                            </select>
                            <label>To</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="s2">
                <h4>Session 2</h4>
                <div class="row-three">
                    <div class="third">
                        <div class="input-group">
                            <input type="text" id="sd2" class="datepicker" name="sd2">
                            <label>Date</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="ft2" onchange="setFromTime()" name="ft2">
                                <option></option>
                                <option>09:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                            </select>
                            <label>From</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="tt2" onchange="setToTime()" name="tt2">
                                <option></option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                            </select>
                            <label>To</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="s3">

                <h4>Session 3</h4>
                <div class="row-three">
                    <div class="third">
                        <div class="input-group">
                            <input type="text" id="sd3" class="datepicker" name="sd3">
                            <label>Date</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="ft3" onchange="setFromTime()" name="ft3">
                                <option></option>
                                <option>09:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                            </select>
                            <label>From</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="tt3" onchange="setToTime()" name="tt3">
                                <option></option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                            </select>
                            <label>To</label>
                        </div>
                    </div>
                </div>

            </div>

            <div id="s4">
                <h4>Session 4</h4>
                <div class="row-three">
                    <div class="third">
                        <div class="input-group">
                            <input type="text" id="sd4" class="datepicker" name="sd4">
                            <label>Date</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="ft4" onchange="setFromTime()" name="ft4">
                                <option></option>
                                <option>09:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                            </select>
                            <label>From</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="tt4" onchange="setToTime()" name="tt4">
                                <option></option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                            </select>
                            <label>To</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="s5">
                <h4>Session 5</h4>
                <div class="row-three">
                    <div class="third">
                        <div class="input-group">
                            <input type="text" id="sd5" class="datepicker" name="sd5">
                            <label>Date</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="ft5" onchange="setFromTime()" name="ft5">
                                <option></option>
                                <option>09:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                            </select>
                            <label>From</label>
                        </div>
                    </div>
                    <div class="third">
                        <div class="input-group">
                            <select type="text" id="tt5" onchange="setToTime()" name="tt5">
                                <option></option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                            </select>
                            <label>To</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    

    <!-- STEP 5 -->
    <section id="step5" class="w3-animate-opacity" style="overflow: auto;">
        <div class="row-two">
            <div class="half">
                <h4>Product</h4>
                <div id="checkout">
                    <div class="center">
                        <h2 id="print-service">Kids Ski School</h2>
                        <img src="../ill/skier.png" style="height: 80px; width: auto;">
                    </div>
                    <table id="">
                        <tr>
                            <th style="text-align:center;"><h5 style="margin: 10px 0" id="print-size">3 days</h5></th>
                            <th style="text-align:center;"><h5 style="margin: 10px 0" id="print-sessions"></h5></th>
                        </tr>
                        
                    </table>
                    <div class="center">
                        <p id="print-name"></p>
                        <p id="print-email"></p>
                        <p id="print-phone"></p>
                    </div>
                        
                        
                        
                    </table>

                    <div id="white-bg" style="">
                        <table>
                            <tr>
                                <td><img src="../ill/map.PNG"></td>
                                <td>
                                    <h6>Schmittenstrasse 8</h6>
                                    <p style="text-align: start">5700 Zell am See</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

            <div class="half">
                <h4 id="participants-header">Participants</h4>
                <div id="checkout">
                    <div class="center">

                    </div>
                    <table id="persontable">
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>level</th>
                            <th id="days-header">days</th>
                        </tr>

                        <tr>
                            <td id="pn1"></td>
                            <td id="pa1"></td>
                            <td id="pl1"></td>
                            <td id="pd1"></td>
                        </tr>
                        <tr>
                            <td id="pn2"></td>
                            <td id="pa2"></td>
                            <td id="pl2"></td>
                            <td id="pd2"></td>
                        </tr>
                        <tr>
                            <td id="pn3"></td>
                            <td id="pa3"></td>
                            <td id="pl3"></td>
                            <td id="pd3"></td>
                        </tr>
                        <tr>
                            <td id="pn4"></td>
                            <td id="pa4"></td>
                            <td id="pl4"></td>
                            <td id="pd4"></td>
                        </tr>
                        <tr>
                            <td id="pn5"></td>
                            <td id="pa5"></td>
                            <td id="pl5"></td>
                            <td id="pd5"></td>
                        </tr>

                    </table>
                </div>
            

            
                <h4 id="sessions-header">Sessions</h4>

                <div id="checkout">
                    <div class="center">
                    </div>
                    <table id="datetable">
                        <tr>
                            <th>Date</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                        <tr>
                            <td id="psd1"></td>
                            <td id="pft1"></td>
                            <td id="ptt1"></td>
                        </tr>
                        <tr>
                            <td id="psd2"></td>
                            <td id="pft2"></td>
                            <td id="ptt2"></td>
                        </tr>
                        <tr>
                            <td id="psd3"></td>
                            <td id="pft3"></td>
                            <td id="ptt3"></td>
                        </tr>
                        <tr>
                            <td id="psd4"></td>
                            <td id="pft4"></td>
                            <td id="ptt4"></td>
                        </tr>
                        <tr>
                            <td id="psd5"></td>
                            <td id="pft5"></td>
                            <td id="ptt5"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>





    </section>
    
    <section>
        <div class="center">
            
        </div>
    </section>
   
    <section>
        <a class="btn back_btn" id="back_btn" onclick="back()">Back</a>
        <a class="btn next_btn" id="next_btn" onclick="next()">Next</a>
        <button class="btn submit_btn" id="submit_btn" type="submit" name="submit">Submit</Button>
    </section>

    </form>

    <!-- Jquery -->
    <script>
        // create datepicker
        jQuery(document).ready(function () {
            jQuery('.sundaypicker').datepicker({
                minDate: new Date(2018, 10, 1),
                maxDate: new Date(2019, 3, 15),
                //dateFormat: 'DD, d.m.yy',
                dateFormat: 'yy-m-d',
                constrainInput: true,
                beforeShowDay: function (date) {
                    var day = date.getDay();
                    return [day == 0, ""];
                }
            });
        });
    </script>


    <!-- Jquery -->
    <script>
        // create datepicker
        jQuery(document).ready(function () {
            jQuery('.datepicker').datepicker({
                minDate: new Date(2018, 10, 1),
                maxDate: new Date(2019, 3, 15),
                dateFormat: 'DD, d.m.yy'    
            });
        });
    </script>

    <!-- Javascript -->
    <script src="../js/booking.js"></script>

</body>

</html>