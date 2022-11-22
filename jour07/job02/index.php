<?php
function bonjour($jour) {
    if($jour == TRUE) {
        echo"Bonjour<br/>";
    }
    else if($jour == FALSE) {
        echo"Bonsoir <br/>";
    }
}

$true = TRUE;
$false = FALSE;

bonjour($true);

bonjour($false);
?>