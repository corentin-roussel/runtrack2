<?php
$count = 0;

foreach ($_GET as $valeur) {
    if($valeur != "") {
    $count += 1;
    }
}
echo "Le nombre d'arguments est de $count !"

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
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom..." >

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom..." >

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre e-mail..." >

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>