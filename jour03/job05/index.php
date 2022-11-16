<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$voy = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$cons = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z'];

$dic = [
    "Consonnes" => 0,
    "Voyelles" => 0,
];

$i = 0;



while (isset($str[$i])) {
    foreach($voy as $index) {
        if($index === $str[$i] ) {
            $dic["Voyelles"]++;
        } 
    }
    foreach($cons as $index1) {
        if ($index1 == $str[$i]) {
            $dic["Consonnes"]++;
        }
    }
    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["Voyelles"]; ?></td>
            <td><?php echo $dic["Consonnes"]; ?></td>
        </tr>
    </tbody>
</table>


</body>
</html>