<?php

foreach($_POST as $key => $values) {
    if($values != "") { 
        if($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
            echo "C'est pas ma guerre.";
            break;
        }
        else {
            echo "Votre pire cauchemar";
            break;
        }
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
    <form action="index.php" method="POST" class="form-flex">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Entrez votre pseudo..." >

        <label for="password">Password</label>
        <input type="text" id="password" name="password" placeholder="Entrez votre mdp..." >

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>