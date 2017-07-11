


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>Nouveau</title>
</head>
<body>

  <!--<?php include('template/header.php');?>-->

  


<div id="main">
  
  <h1>Nouveau topic</h1>
  
  <form action="../service/service_nouveau.php" method="post">
    
    <input type="hidden" name="membre_id" value="<?php echo $membre_id;?>" />
    
    <label for="titre">Titre :</label>
   
    <input type="text" name="titre" value="<?php if(isset($titre)) echo $titre;?>" />
    
    <label for="message">Message :</label>

    <textarea name="message"><?php if(isset($message)) echo $message;?></textarea>
    
    <input type="submit" class="submit" value="Envoyer" />
    
  </form>
  
</div>
  
</body>
</html>
