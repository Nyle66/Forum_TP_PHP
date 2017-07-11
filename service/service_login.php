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
// if(check_session())
// {
//   header('Location: index.php');
// }

$title = 'Connexion';

$pseudo = trim($_POST['pseudo']);
$pass = trim($_POST['pass']);



if($pseudo != "" && $pass != ""){
  $req1 = check_pseudo($pseudo);
  $req2 = check_password($pseudo);

  $req2 = $req2[0]["pass"];

  if(empty($req1)){

    header("location: ../index.php?page=login");
    die();

  }
  else {

    if($pass == $req2){
      $_SESSION["pseudo"] = $pseudo;
      header("location: ../index.php?page=header");
      die();
    }
    else{
      header("location: ../index.php?page=login");
      die();
    }

  }


}
else{
    header("location: ../index.php?page=login");
    die();
}




?>