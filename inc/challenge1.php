<?php
// Step 1: Create a variable named 'hours' and set it to the integer value of 40

$hours = 40;

// Step 2: Create a variable named 'productivity' and set it to the float value of 10.5

$productivity = 10.5;
    
// Step 3: Create a third variable named 'firstTotal' and set it equal to the value of multiplying 'hours' by 'productivity'.
    
$firstTotal = $hours * $productivity;

// Step 4: Add 1 to the 'hours' variable
    
$hours++;

// Step 5: Subtract .5 from the 'productivity' variable

$productivity-=.5;

// Step 6: Create a third variable named 'secondTotal' and set it equal to the new value of multiplying 'hours' by 'productivity'.
$secondTotal = $hours * $productivity;

// Step 7: Replace the comments to add 'firstTotal' and 'secondTotal' to the following output

echo 'Brooks law is a claim about software project management, according to which "adding manpower to a late software project makes it later". ';
echo 'For example, if your original productivity accomplished is '; 
//display 'firstTotal'
echo $firstTotal;
echo ' and you add 1 hour, while at the same time subtracting .5 measure of productivity, your new productivity accomplished is only ';
//display 'secondTotal'
echo $secondTotal;