<!--<?php include('../config/fonctions.php');?>-->

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<head>
  <title><?php if(isset($title)) echo $title;?></title>
</head>
<body>
  
  <div id="content">
    
    <div id="header">
      
      <div id="menu">
        
        <ul>
          
          <li><a href="../index.php">Accueil</a></li>
          <?php if(!check_session()):?>
          <li><a href="template/login.php">Connexion</a></li>
          <li><a href="template/inscription.php">Inscription</a></li>
          <?php else:?>
          <li><a href="nouveau.php">Nouveau sujet</a></li>
          <li><a href="logout.php">Logout</a></li>
          <?php endif;?>
          
        </ul>
        
      </div>

      <h1>BIENVENUE SUR LE FORUM </h1>
      
    </div>