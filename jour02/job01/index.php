<?php
// for ($x = 0; $x <= 1337; $x++) {
//     if ($x === 42){
//         echo
//             "<b><u>$x</u></b><br/>";
//     }
//     else {
//         echo
//             "$x<br/>";
//     }
// }
?> 

<?php
$x = 0;

while ($x <= 1337) {
    if ($x === 42) {
        echo
            "<b><u>$x</u></b><br/>";
    }
    else {
        echo
            "$x<br/>";
    }
    $x++;
}
?>