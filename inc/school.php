<?php 
//Students class average <70%:
//Dear Jane Doe,
//We look forward to seeing you at summer school, beginning July 1st!

//Student class average >=70% and current grade 9
//Dear Jane Doe,
//Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!

//Student class average >=70% and current grade 10
//Dear Jane Doe,
//Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!

//Student class average >=70% and current grade 11
//Dear Jane Doe,
//Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!

//Student class average >= 70% and current grade 12
//Dear Jane Doe,
//Congratulations! You’ve graduated High School! Don’t forget to come back and visit.

$firstName = 'Jane';
$lastName = 'Doe';
$currentGrade = 9;
$finalAverage = .9;
$messageBody = '';

if(!$firstName || !$lastName) {
    echo 'Please enter a student name.';
} elseif ($currentGrade < 9 || $currentGrade > 12) {
    echo 'This is only for high school students. Please enter a grade between 9 and 12.';
} else {
    if ($finalAverage < .70) {
        $messageBody = 'We look forward to seeing you at summer school, beginning July 1st!';
    } else {
        switch ($currentGrade) {
            case 9:
                $messageBody = 'Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!';
                break;
            case 10:
                $messageBody = 'Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!';
                break;
            case 11:
                $messageBody = 'Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!';
                break;
            case 12:
                $messageBody = 'Congratulations! You’ve graduated High School! Don’t forget to come back and visit.';
                break;
            default:
                $messageBody = 'Error: Grade level is not 9-12';
                break;
        }
    }
    echo "Dear $firstName $lastName,\n";
    echo $messageBody;
}
?>