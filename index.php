<?php
    /*
     * Bien en général. Il faut paufiner les services et attribuer
     * des fonctions aux controlleur qui doivent lui être attribuer
     * comme le controle des sessions et destruction de session.
     *
     * Pour le SQL: il faut rajouter un userId dans la table post
     * pour lui indiquer son propriétaire et faire une contrainte clé
     * avec une FOREIGN KEY (userId) REFERENCES user(id)
     * */
    session_start();
  
    include_once("config/fonctions.php");

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = "header";
    }
    switch ($page){
        case 'login':
        include("template/login.php");
        break;

        case 'header':
        include("template/header.php");
        break;

        case 'inscription':
        include("template/inscription.php");
        break;

        case 'nouveau':
        include("template/nouveau.php");
        break;
        
    
    }

?>
