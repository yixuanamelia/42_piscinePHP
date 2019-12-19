#!/usr/bin/php
<?php
    if ($argc == 2) {
        $array = array_filter(explode(' ', $argv[1]));
        $results = "";
        foreach($array as $v)
            $results .= $v." ";
        echo trim($results)."\n";
    }
?>
