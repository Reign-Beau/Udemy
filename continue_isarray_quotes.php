<?php
    $codingLanguages = array("JavaScript", "Python", "Java", "PHP", "Others" => array(
        "C", "C++", "Kotlin"
    ));

    foreach ($codingLanguages as $languages) {
        if(is_array($languages)) {
            continue;
        }
        echo $languages . " ";
    }

    $Name = "Justin";
    echo "My name is $Name";
    echo 'My name is $Name';