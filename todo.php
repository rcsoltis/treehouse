<?php 
include 'inc/list.php';

$status = false;
$filter = array();
foreach ($list as $key => $item) {
    if ($item['complete'] == $status) {
        $filter[] = $key;
    }
}
//echo '<pre>';
//var_dump($filter, $list);
//echo '</pre>';


echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

foreach ($filter as $id) {
    echo '<tr>';
    echo '<td>' . $list[$id]['title'] . "</td>\n";
    echo '<td>' . $list[$id]['priority'] . "</td>\n";
    echo '<td>' . $list[$id]['due'] . "</td>\n";
    echo '<td>';
        if ($list[$id]['complete']) {
            echo 'Yes';
        } else {
            echo 'No';
        }
    echo "</td>\n";
    echo '</tr>';
}

echo '</table>';

?>