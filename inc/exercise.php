<?php
//store each excercise in string variable
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';
//create variable containing the day of the week
$day = date('N');
//$day = 2; manual test to see if it's working
//var_dump($day);
//use if statement to test for day of the week
if ($day == 1) {
    echo $exercise1;
} elseif ($day == 2) {
    echo $exercise2;
} elseif ($day == 3) {
    echo $exercise3;
} elseif ($day == 4) {
    echo $exercise4;
} elseif ($day == 5) {
    echo $exercise5;
} elseif ($day == 6) {
    echo $exercise6;
} elseif ($day == 7) {
    echo $exercise7;
}
//display the corresponding excercise string

?>