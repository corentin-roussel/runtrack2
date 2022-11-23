<?php
session_start();


if(isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
}
else {
    $_SESSION['nbvisites'] = 1;
}


if(isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}



echo 'Vous êtes le ' . $_SESSION['nbvisites'] . ' visiteur';
?>

<form method="POST" id="form">
<input type="submit" name="reset" value="Reset">