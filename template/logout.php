<?php

/* Alfonso tu devrais faire ceci dans le controleur... c'est à dire
 * dans l'index.php. le dossier template est sensé être une vue
 * */

session_start();
unset($_SESSION['membre']);
session_destroy();
header('Location: ../index.php');

?>