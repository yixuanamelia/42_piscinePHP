#!/usr/bin/php
<?php
if ($argc > 1) {
    $array = array_values(array_filter(explode(' ', $argv[1])));
    $array[count($array)] = $array[0];
    unset($array[0]);
    $results = "";
    foreach ($array as $v)
        $results .= $v . " ";
    echo trim($results) . "\n";
}

?>