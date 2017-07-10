<?php

if(!isset($_SESSION['id'])) {
  header("Location: index.php");
  exit();
}

display();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
</head>
<body>



      <h1>Page du forum</h1>
   

    <form  action="service_forum.php" method="post">


        <p> Titre du Sujet </p>
        <input type="text"  placeholder="titre" name="titre">
        <br>
        <p> Texte </p>
        <input type="text"  placeholder="texte"  row=5 name="post">
        <br>

        <button type="submit" class="btn">Envoyer</button>

    </form>
    </form>
    <form action="deco.php" method="post"> 
    <button type="submit" class="btn">déconnexion</button>
    </form>

<p><?php display(); ?></p>


</body>
</html>