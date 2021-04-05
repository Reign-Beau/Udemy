<?php
    $str = "You can explode things to break down strings and implode them to combine strings.";
    $exploded = explode(" ", $str, 9);
    foreach($exploded as $e) {
        echo $e . "<br />";
    }

    $arr = array("implode", "them", "to", "combine", "strings");
    $imploded = implode(" ", $arr);
    echo $imploded;

