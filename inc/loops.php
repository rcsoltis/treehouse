<?php

//prints 100 years, with the current year as the final year
//No newline in order to save space

$currentYear = date('Y');
    $year = $currentYear - 99;

while ($year <= $currentYear) {
    echo $year . " </ br>";
    $year++;
}

//alternative way to display 101 years

/*do {
    echo $year . " </ br>";
} while (++$year <= $currentYear);*/

?>