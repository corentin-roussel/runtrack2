<?php
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
<main>
        <article class="container">
            <form action="index.php" method="GET" class="form-flex">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom..." >

                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom..." >

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre E-mail..." >

                <label for="sujet">Sujet</label>
                <textarea name="sujet" id="sujet" placeholder="Ecrivez quelque chose" cols="30" rows="5"></textarea>
                <input type="submit" value="Envoyer">
            </form>
        </article>

        <table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($_GET as $key => $values) { 
                        if($values == TRUE) { 
                            echo"<tr>
                                    <td>$key</td>
                                    <td>$values</td>
                                </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>