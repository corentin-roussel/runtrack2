<?php



setcookie('nbvisites', '0', time() + 3600); //initialiser un cookie 


if(isset($_POST['reset'])) {
    $_COOKIE['nbvisites'] = 0; //si bouton reset utiliser avce methode post remise du compteur a 0;
}


if(isset($_COOKIE['nbvisites'])) {
    $_COOKIE['nbvisites'] = (int)$_COOKIE['nbvisites']; // si cookies nbvisites existe trnasforme le cookie ne int pour pouvoir itérer
    setcookie('nbvisites', $_COOKIE['nbvisites'] +=1, time()+ 3600); //reset du cookie pour pouvoir lui dire d'itérer
}
else {
    $_COOKIE['nbvisites']=0; //sinon initialiser la variable cookie nbvisites a 0;
}

?>

<h1>Voila l'iteration du cookie <?php echo $_COOKIE['nbvisites'] ?></h1> <!-- affichage de l'iteration de nombre de cookie  -->

<form method="POST" id="form">
    <input type="submit" name="reset" value="reset">
</form>