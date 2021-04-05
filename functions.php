<?php
    function echoTest($phrase) {
        echo $phrase;
    }
    echoTest("Greetings human");

    $name = "Justin";
    function myName($name) {
        return $name;
    }
    echo myName("Justin");

    function subtraction($a, $b) {
        return $a -$b;
    }
    echo subtraction(5, 3);

    function equals($a, $b): bool
    {
        if ($a == $b) {
            return true;
        } else {
            return false;
        }
    }

    if (equals(5, 5)==true) {
    echo "These numbers are equal.";
        } else {
        echo "These numbers are not equal.";
}