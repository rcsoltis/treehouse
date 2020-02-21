<?php

$learn = array('PHP','Python','algorithms','APIs','Linux server');
asort($learn);

/*$count = 0;
foreach ($learn as $v) {
    echo "$v <br>\n";
}*/

for ($i = 0; $i < count($learn); $i++) {
    echo $learn[$i] . "\n";
}

?>