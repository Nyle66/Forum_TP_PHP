
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>Login</title>
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
  
  <h1>Connexion</h1>
  
  <?php if(isset($erreurid)):?>
  <div class="error"><?php echo $erreurid;?></div>
  <?php endif;?>
  
  <form action="service/service_login.php" method="post">
    
    <label for="pseudo">Pseudo :</label>
    <span class="error"><?php if(isset($erreurpseudo)) echo $erreurpseudo;?></span>
    <input type="text" class="input" name="pseudo" value="<?php if(isset($pseudo)) echo $pseudo;?>" />
    
    <label for="pass">Mot de passe :</label>
    <span class="error"><?php if(isset($erreurpass)) echo $erreurpass;?></span>
    <input type="password" class="input" name="pass" value="<?php if(isset($pass)) echo $pass;?>" />
    
    <input type="submit" class="submit" value="Envoyer" />
    
  </form>
  
  
  
  
</div>
</body>
</html>
