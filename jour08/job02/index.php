<?php



setcookie('nbvisites', '0', time() + 3600);


if(isset($_POST['reset'])) {
    $_COOKIE['nbvisites'] = 0;
}


if(isset($_COOKIE['nbvisites'])) {
    $_COOKIE['nbvisites'] = (int)$_COOKIE['nbvisites'];
    setcookie('nbvisites', $_COOKIE['nbvisites'] +=1, time()+ 3600);
}
else {
    $_COOKIE['nbvisites']=0;
}

?>

<h1>Voila l'iteration du cookie <?php echo $_COOKIE['nbvisites'] ?></h1>

<form method="POST" id="form">
    <input type="submit" name="reset" value="reset">
</form>