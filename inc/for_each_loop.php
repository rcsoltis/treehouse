<?php

$learn = array('PHP','Phython','algorithms','APIs','Linux server');
asort($learn);

$count = 0;
foreach ($learn as $v) {
    echo "$v <br>\n";
}

?>