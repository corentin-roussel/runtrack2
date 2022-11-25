<?php
$mysqli = new mysqli("localhost", "root", "", "jour09"); // Connexion a lcoalhost user root pas de mot de passe et base de donnée jour09


if($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL " . $mysqli -> connect_error;
    exit();
} // if connection error echo une phrase et exit

$sql = ("SELECT COUNT(*) AS nb_etudiants from etudiants;"); // Stocké dans une variable selectionné  tous les champ pour etudiants en dessous de 18ans
$result = $mysqli -> query($sql); // Stocké le résultat dans la variable result = a la connexion a la base de données et on fetch la variable sql

$line = $result -> fetch_array(MYSQLI_ASSOC); // $line  = a la variable result et va fetch array (MYSQL_ASSOC) pour récuperer uniquement l'id  prenom nom age etc..
?>

<style>
     table,
    th,
    td
    {
        border: 2px solid red;
        padding: 1rem;
    }
</style>

<table>
    <thead>
        <tr>
            <?php
                    foreach($line as $key => $values) { // Pour chaque variable ligne as $key => $values
                            echo '<th>' . $key . '</th>'; // echo $key
                    }  

             ?>
        </tr>
    </thead>
    <tbody>
        
            <?php

                while ($line != NULL) { // pour variable line n'est pas égale a NULL (ne pas réutiliser fetch_array sinon l'index passe a 1)
                    echo "<tr>"; //echo balise <tr>
                    foreach($line as $key => $values) { //pour chaque ligne as clé => values
                            echo '<td>' . $values . '</td>'; // echo balise html + values
                    }
                $line = $result -> fetch_array(MYSQLI_ASSOC); // redonner la variable line avec fetch array pour continuer d'écrire les lignes
                echo "</tr>"; //pour revenir a la ligne a chaque nouvelle array
                }
                
            ?>
    </tbody>
</table>