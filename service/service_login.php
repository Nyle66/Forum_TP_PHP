<?php
session_start();
require('../config/connect.php');
require('../config/fonctions.php');

if(check_session())
{
  header('Location: index.php');
}

$title = 'Connexion';

if(!empty($_POST))
{
  extract($_POST);
  
  $valid = (empty($pseudo) || empty($pass)) ? false : true;
  
  $erreurpseudo = (empty($pseudo)) ? 'Indiquez votre pseudo' : '';
  $erreurpass = (empty($pass)) ? 'Indiquez votre mot de passe' : '';
  
  if($valid == true)
  {
    if(!check_id($pseudo,$pass))
    {
      $erreurid = 'Mauvais identifiants';
      header('Location: ../index.php');
    }
    
    else
    {
      $_SESSION['membre'] = $pseudo;
      
      header('Location: header.php');
    }
  }
}

?>