<?php
$str = "Les choses que l'on possede finissent par nous posseder.";

$i = 0;

while($str[$i]) {
    $i++;
}
for ($j = ($i-1); $j >= 0; $j--) {
    echo $str[$j];
}

?>