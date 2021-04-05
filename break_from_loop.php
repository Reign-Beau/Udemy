<?php
    $codingLanguages = array("JavaScript", "Python", "Java", "PHP");
    foreach ($codingLanguages as $language) {
        if ($language=="PHP") {
            echo "The language is: " . $language;
            break;
        }
    }