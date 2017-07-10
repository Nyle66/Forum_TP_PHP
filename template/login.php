
<?php include('header.php');?>




<div id="main">
  
  <h1>Connexion</h1>
  
  <?php if(isset($erreurid)):?>
  <div class="error"><?php echo $erreurid;?></div>
  <?php endif;?>
  
  <form action="../service/service_login.php" method="post">
    
    <label for="pseudo">Pseudo :</label>
    <span class="error"><?php if(isset($erreurpseudo)) echo $erreurpseudo;?></span>
    <input type="text" name="pseudo" value="<?php if(isset($pseudo)) echo $pseudo;?>" />
    
    <label for="pass">Mot de passe :</label>
    <span class="error"><?php if(isset($erreurpass)) echo $erreurpass;?></span>
    <input type="password" name="pass" value="<?php if(isset($pass)) echo $pass;?>" />
    
    <input type="submit" class="submit" value="Envoyer" />
    
  </form>
  
  
  
  
</div>
