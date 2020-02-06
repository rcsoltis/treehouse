<?php
    //number in pounds to convert to kilograms
    $pounds = 140;
    //floating point value for the pounds to kilogram conversion
    $lb_to_kg = 0.453592;
    //use above variables to calculate pounds multiplied by kilogram conversion
    $kilograms = $pounds * $lb_to_kg;
    //display the pounds to kilograms
    echo "<p>Weight: ";
    echo $pounds;
    echo " lbs = ";
    echo $kilograms;
    echo " kg</p>";
    


    //number of miles we want to convert to kilometers
    $miles = 6.2;
    //floating point value for mile to kilometer conversion
    $miles_to_km = 1.60934;
    //use the variable above to calculate miles multiplied by the kilometer conversion
    $kilometers = $miles * $miles_to_km;
    //display the miles to kilometers.
    echo "<p>Distance: ";
    echo $miles;
    echo " miles = ";
    echo $kilometers;
    echo " km</p>";
?>