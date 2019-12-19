#!/usr/bin/php
<?php
$array = array();
unset($argv[0]);
foreach ($argv as $av) {
    $tmp = array_filter(explode(' ', $av));
    foreach ($tmp as $av2)
        $array[] = $av2;
}
sort($array);
foreach ($array as $av)
    echo $av . "\n";

?>