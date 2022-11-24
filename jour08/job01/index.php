<?php
session_start(); //démarre une nouvelle session


if(isset($_SESSION['nbvisites'])) { 
    $_SESSION['nbvisites']++;  //si variable $_SESSION['nbvisites'] existe variable +=1
}
else { 
    $_SESSION['nbvisites'] = 1;//sinon déclaré la variable = 1
}


if(isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0; // si bouton reset avec mehtod post remet le compteur a 0; 
}




?>

<h1><?php echo 'Vous êtes le ' . $_SESSION['nbvisites'] . ' visiteur' ?></h1> <!--echo du nb de visites avec la variable $_SESSION -->

<form method="POST" id="form">
<input type="submit" name="reset" value="Reset">
</form>