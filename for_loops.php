<?php
    echo "Same as JavaScript";
    for($i = 1; $i <= 5; $i++) {
        echo $i . " is the number <br />";
    };

    $arr = array("Apple", "Banana", "Plum", "Pear");
    foreach ($arr as $value) {
        echo $value . " <br />";
    };

    foreach ($arr as $key => $value) {
        echo "Key: " . $key . " &rarr; " . $value . " <br />";
    }

