#!/usr/bin/php
<?php
    $stdin = fopen("php://stdin", "r");
    while ($stdin && !feof($stdin)) {
        echo "Enter a number: ";
        $data = fgets($stdin);
        if ($data) {
            $data = str_replace("\n", "", "$data");
            if (is_numeric($data)) {
                if ($data % 2 == 0)
                    echo "The numberber " . $data . " is even\n";
                else
                    echo "The number " . $data . " is odd\n";
            } else
                echo "'" . $data . "' is not a number\n";
        }
    }
    fclose($stdin);
    echo "\n";
?>
