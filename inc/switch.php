<?php
    $today = date('l');
    //test $today = "nope";
    switch ($today) {
       case "Monday":
           echo "Clean bathroom on Monday";
           break;
       case "Tuesday":
           echo "Sweep and mop on Tuesday";
           break;
       case "Wednesday":
           echo "Do laundry on Wednesday";
           break;
       case "Thursday":
           echo "Volunteer on Thursday";
           break;
       case "Friday":
           echo "Dust on Friday";
           break;
       case "Saturday":
           echo "Have fun Saturday";
           break;
       case "Sunday":
           echo "Grocery shop on Sunday";
           break;
       default:
           echo "I don't know what day it is";
           break;
    }

?>