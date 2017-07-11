<?php
session_start();
require('../config/connect.php');
require('../config/fonctions.php');

// if(!check_session())
// {
//   header('Location: index.php');
// }

$title = 'Nouveau topic';

// $pseudo = $_SESSION['membre'];
// $membre_id = get_membre_id($pseudo);


if(!empty($_POST))
{
  extract($_POST);
  $valid = (empty($titre) || empty($message)) ? false : true;
  $erreurtitre = (empty($titre)) ? 'Indiquez un titre' : '';
  $erreurmessage = (empty($message)) ? 'Posez votre question' : '';
  /*Alfonso: il faut encore rapporter ces erreurs au user
   * */
  
  if($valid)
  {
    $titre = strip_tags($titre);
    $message = strip_tags($message);
    $membre_id = strip_tags($membre_id);
    
    add_topic($titre,$message,$membre_id);
    
    header('Location: ../index.php?page=header');
  }
}


?>