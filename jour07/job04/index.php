<?php
function calcule($a, $operation, $b) {
    if($operation == "+") {
        $myResult = $a + $b;
    } 
    else if($operation == "-") {
        $myResult = $a - $b;
    }
    else if($operation == "/") {
        $myResult = $a / $b;
    }
    else if($operation == "%") {
        $myResult = $a % $b;
    }
    else if($operation == "*") {
        $myResult = $a * $b;
    }

    return $myResult;
}


echo calcule(5, "*", 8);
?>