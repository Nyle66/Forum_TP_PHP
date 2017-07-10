<!--<?php include('../config/fonctions.php');?>-->

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<head>
  <title><?php if(isset($title)) echo $title;?></title>
</head>
<body>
  
  <div id="content">
    
    <div id="header">
      
      <div id="menu">
        
        <ul>
          
          
          <?php if(!check_session()):?>
          <li><a href="index.php?page=login">Connexion</a></li>
          <li><a href="index.php?page=inscription">Inscription</a></li>
          <?php else:?>
          <li><a href="template/nouveau.php">Nouveau sujet</a></li>
          <li><a href="template/logout.php">Logout</a></li>
          <?php endif;?>
          
        </ul>
        
      </div>

      <h1>BIENVENUE SUR LE FORUM </h1>


        <?php if(!check_session()):?>
        <p> Connectez-vous !</p>
        <?php else:?>
        <?php
        
        $topics = get_topics();
        foreach($topics as $t):?>
        
        <h1><?php echo $t['titre'];?></a></h1>
        <p><?php echo substr($t['message'],0,200);?> ...</p>
        
        
        <?php endforeach;?>
        <?php endif;?>
      
    </div>

    </body>