<?php

  
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

        
    
    }

?>
