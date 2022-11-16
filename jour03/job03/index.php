<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$voy = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$i = 0;

while (isset($str[$i])) {
    foreach($voy as $index) {
        if($index === $str[$i] ) {
            echo "$str[$i]";
        } 
    }
    $i++;
}
?>