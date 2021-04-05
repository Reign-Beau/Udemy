<?php
    $arr1 = array("Numeric", "Associative", "Multidimensional");
    echo $arr1[0] . " automatically assigns indices";

    $arr2 = array("First" => "Numeric", "Second" => "Associative", "Third" => "Multidimensional");
    echo $arr2["Second"] . " lets you name your indices";

    $arr3 = array(
        "arrayTypes" => array(
            "Numeric", "Associative", "Multidimensional"
        ),
        "arrayContent" => array(
            "Strings", "Integers and floats", "Other things"
        )
    );
    echo $arr3["arrayTypes"][2];