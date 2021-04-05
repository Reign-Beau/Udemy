<?php
    $string = "I will replace words in this string";
    $string = str_replace("will", "have", $string);
    $string = str_replace("replace", "replaced", $string);
    echo $string;