<?php
  $erreurpseudo = "";
  if(isset($_GET["pseudo"])){
      if($_GET["pseudo"]== false){
        $erreurpseudo = "Pseudo déja pris";
      }
  }
   $erreuremail = "";
  if(isset($_GET["email"])){
      if($_GET["email"]== false){
        $erreuremail = "Email déja pris";
      }
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>Inscription</title>
</head>
<body>

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



<div id="main">
  
  <h1>Inscription</h1>
  
  <?php if(isset($success)):?>
  <div class="success"><?php echo $success;?></div>
  <?php endif;?>
  
  <form action="service/service_inscription.php" method="post">
    
    <label for="pseudo">Pseudo :</label>
    <p><?php echo $erreurpseudo  ?></p>
    <input type="text" name="pseudo" />
    <br><br>
    
    <label for="email">Email :</label>
    <p><?php echo $erreuremail  ?></p>
    <input type="text" name="email" />
    <br><br>
    
    <label for="pass">Mot de passe :</label>
    <input type="password" name="pass" value="<?php if(isset($pass)) echo $pass;?>" />
    
    <input type="submit" class="submit" value="Envoyer" />
    
  </form>
  
</div>

</body>
</html>

