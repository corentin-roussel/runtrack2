<?php
$str = "Dans l'espace, personne ne vous entend crier";

echo "$str<br/>";

$i = 0;

while(isset($str[$i])) {
    $i++;
}

echo "Cette chaine de caractéres et composés de $i caractéres";
?>