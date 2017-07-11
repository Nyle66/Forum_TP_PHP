<?php
session_start();
require('../config/connect.php');
require('../config/fonctions.php');


/*
 * Alfonso: je ne pense pas que ça soit ici qu'il faille faire ce
 * genre de checking. mais plutot dans le controlleur. on check si on
 * est dans la session ou pas selon la page ou on est. Un service représente
 * une action user. Ce contrôle ne doit pas dépendre d'une action user
 * */
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
        /*Alfonso: comment est reportée cette erreur au user?
         * */
      $erreurid = 'Mauvais identifiants';
      header('Location: ../index.php?page=header');
    }
    
    else
    {
      $_SESSION['membre'] = $pseudo;
     
      header('Location: ../index.php?page=header');
    }
  }
}

?>