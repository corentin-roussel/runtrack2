<?php

foreach($_GET as $key => $values) {
    if($_GET['nombre']%2 === 0) {
        echo "" . $_GET['nombre'] . " est pair";
    }
    else {
        echo "". $_GET['nombre'] ." est impair";
    }
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
    <form action="index.php" method="GET" class="form-flex">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Entrez votre nombre..." >

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>