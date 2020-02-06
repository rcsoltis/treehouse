<?php

//IN PROGRESS

   /* $currentYear = date('Y');
    $year = $currentYear - 100;

    while (++$year <= $currentYear) {
        echo $year . "</ br>\n";
    } */

$iceCream[] = [
        'brand' => 'Lovelys 50 50',
        'name' => 'Salted Caramel',
        'priority' => 1,
        'date last consumed' => '11/20/18',
    ];

    $iceCream[] = [
        'brand' => 'Tillamook',
        'name' => 'Malted Moo Shake',
        'priority' => 2,
        'date last consumed' => '1/26/20',
    ];

    $iceCream[] = [
        'brand' => 'Kilwins',
        'name' => 'Key Lime Pie',
        'priority' => 3,
        'date last consumed' => '11/27/19',
    ];

    $iceCream[] = [
        'brand' => 'Hudsonville',
        'name' => 'Superman',
        'priority' => 5,
        'date last consumed' => '8/14/19',
    ];

    $iceCream[] = [
        'brand' => 'Whats The Scoop',
        'name' => 'Brown Butter Almond Brittle',
        'priority' => 4,
        'date last consumed' => '7/7/18',
    ];

    $iceCream[] = [
        'brand' => 'Salt and Straw',
        'name' => 'Almond Brittle with Salted Ganache',
        'priority' => 6,
        'date last consumed' => '10/20/19',
    ];

//$icecream = ["chocolate", "vanilla", "strawberry"];

/*while(list($key, $val) = each($iceCream)) {
    echo "$key => $val\n";
}*/



foreach($iceCream) {
    echo "$iceCream";
}
    
?>
