<?php
function leetSpeak($str) {
    for($i = 0; isset($str[$i]); $i++) {
        if($str[$i] == "A" || $str[$i] == "a") {
            echo "4";
        }
        else if($str[$i] == "B" || $str[$i] == "b") {
            echo "8";
        }
        else if($str[$i] == "E" || $str[$i] == "e") {
            echo "3";
        }
        else if($str[$i] == "G" || $str[$i] == "g") {
            echo "6";
        }
        else if($str[$i] == "L" || $str[$i] == "l") {
            echo "1";
        }
        else if($str[$i] == "S" || $str[$i] == "s") {
            echo "5";
        }
        else if($str[$i] == "T" || $str[$i] == "t") {
            echo "7";
        }
        else {
            echo $str[$i];
        }
    }
}

$str = "Salut a toi germaine";

echo leetSpeak($str);
?>