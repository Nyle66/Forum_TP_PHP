
<?php include('header.php');?>



<div id="main">
  
  <h1>Inscription</h1>
  
  <?php if(isset($success)):?>
  <div class="success"><?php echo $success;?></div>
  <?php endif;?>
  
  <form action="../service/service_inscription.php" method="post">
    
    <label for="pseudo">Pseudo :</label>
    <span class="error"><?php if(isset($erreurpseudo)) echo $erreurpseudo;?></span>
    <input type="text" name="pseudo" value="<?php if(isset($pseudo)) echo $pseudo;?>" />
    
    <label for="email">Email :</label>
    <span class="error"><?php if(isset($erreuremail)) echo $erreuremail;?></span>
    <input type="text" name="email" value="<?php if(isset($email)) echo $email;?>" />
    
    <label for="pass">Mot de passe :</label>
    <span class="error"><?php if(isset($erreurpass)) echo $erreurpass;?></span>
    <input type="password" name="pass" value="<?php if(isset($pass)) echo $pass;?>" />
    
    <input type="submit" class="submit" value="Envoyer" />
    
  </form>
  
</div>


