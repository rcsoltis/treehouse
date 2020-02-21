<?php

//prints 100 years, with the current year as the final year
//No newline in order to save space

date_default_timezone_set('America/Los_Angeles');//change zone as per need

$currentYear = date('Y');

for ($year = $currentYear - 99; $year <= $currentYear; $year++ ) {
    echo $year . " </ br>";
}

/*while ($year <= $currentYear) {
    echo $year . " </ br>";
    $year++;
}*/

//alternative way to display 101 years

/*do {
    echo $year . " </ br>";
} while (++$year <= $currentYear);*/


?>