

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
        <label for="hauteur">Hauteur</label>
        <input type="text" id="hauteur" name="hauteur" placeholder="Entrez votre nombre..." >

        <label for="nombre">Largeur</label>
        <input type="text" id="largeur" name="largeur" placeholder="Entrez votre nombre..." >

        <input type="submit" value="Envoyer">
    </form>
    <pre>
<?php
if ($_GET) {
    for($i = 0; $i <= $_GET['hauteur'] ; $i++) {
        for($space = 0; $space <= $_GET['hauteur'] - $i; $space++) {
            echo " ";
        }
        echo "/";
        for($tiret = 0; $tiret <= ($i * 2 - 1); $tiret++) {
            echo "_";
        }
        echo "\<br/>";
    
    }

    for($r = 0; $r < $_GET['hauteur']; $r++) {
        echo "|";
        if($i == $_GET['hauteur']) {
            for($t = 0; $t <= $_GET['largeur']; $t++) {
                echo "_";
            }
        }
        else {
            for($t = 0; $t <= $_GET['largeur']; $t++) {
                echo $_GET['largeur'] * 2;
            }
        }
    
        echo "|<br/>";

    }

}
?>
    </pre>
</body>
</html>