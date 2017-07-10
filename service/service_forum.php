<?php
session_start();

$connexion = new PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$query = 'SELECT * FROM user';
$titre = $_POST['titre'];
$post = $_POST['post'];


    $req = $connexion->prepare('INSERT INTO post(titre, post) VALUES( :titre, :post)');
    $req->execute(array(
	'titre' => $titre,
	'post' => $post
	
	));



 header("location: index.php?page=forum");
 die();

?>