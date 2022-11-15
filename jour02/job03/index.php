<?php
// for ($x = 0; $x <= 100; $x++) {
//     if ($x >= 0 && $x <= 20) {
//         echo
//             "<i>$x</i><br/>";
//     }
//     else if ($x === 42) {
//         echo
//             "La Plateforme_<br/>";
//     }
//     else if ($x >= 25 && $x <= 50) {
//         echo
//             "<u>$x</u><br>";
//     }
//     else {
//         echo
//             "$x<br/>";
//     }
// }
?>

<?php
$x = 0;

while ($x <= 100) {
    if ($x >= 0 && $x <= 20) {
        echo
            "<i>$x</i><br/>";
    }
    else if ($x === 42){
        echo
            "La Plateforme_<br/>";
    }
    else if ($x >= 25 && $x <= 50) {
        echo
            "<u>$x</u><br/>";
    }
    else {
        echo
            "$x<br/>";
    }
    $x++;
}
?>