<?php
    $string = "You can use substr to extract text from a string";
    echo substr($string, 8, 26);

    $string2 = "this is how to uppercase letters";
    echo ucwords($string2);
    echo strtoupper($string2);
    $string3 = strtoupper($string2);
    echo strtolower($string3);