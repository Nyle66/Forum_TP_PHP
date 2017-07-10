<?php

function check_pseudo($pseudo)
{
  require('connect.php');
  $req = $bdd->prepare('SELECT id FROM membres WHERE pseudo=:pseudo');
  $req->execute(array('pseudo'=>$pseudo));
  if($req->rowCount()==0)
  {
    return true;
  }
  $req->closeCursor();
}

function check_email($email)
{
  require('connect.php');
  $req = $bdd->prepare('SELECT id FROM membres WHERE email=:email');
  $req->execute(array('email'=>$email));
  if($req->rowCount()==0)
  {
    return true;
  }
  $req->closeCursor();
}

function add_membre($pseudo,$email,$pass)
{
  require('connect.php');
  $req = $bdd->prepare('INSERT INTO membres (pseudo,email,pass) VALUES (:pseudo,:email,:pass)');
  $req->execute(array('pseudo'=>$pseudo,'email'=>$email,'pass'=>sha1($pass)));
  $req->closeCursor();
}

function check_id($pseudo,$pass)
{
  require('connect.php');
  $req = $bdd->prepare('SELECT id FROM membres WHERE pseudo=:pseudo AND pass=:pass');
  $req->execute(array('pseudo'=>$pseudo, 'pass'=>sha1($pass)));
  if($req->rowCount()>0)
  {
    return true;
  }
}

function check_session()
{
  if(!empty($_SESSION['membre']))
  {
    return true;
  }
}

// function get_pseudo($email)
// {
//  require('config/connect.php');
//    $req = $bdd->prepare('SELECT pseudo FROM membres WHERE email=:email');
//   $req->execute(array('email'=>$email));
//    $data = $req->fetch(PDO::FETCH_OBJ);
//  $pseudo = $data->pseudo;
//    return $pseudo;
//  $req->closeCursor();
//  }



//  function get_email($pseudo)
//   {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT email FROM membres WHERE pseudo=:pseudo');
//    $req->execute(array('pseudo'=>$pseudo));
//    $data = $req->fetch(PDO::FETCH_OBJ);
//    $email = $data->email;
//    return $email;
//  $req->closeCursor();
//  }

//  function get_membre_id($pseudo)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT id FROM membres WHERE pseudo=:pseudo');
//    $req->execute(array('pseudo'=>$pseudo));
//    $data = $req->fetch(PDO::FETCH_OBJ);
//   $membre_id = $data->id;
// return $membre_id;
//  $req->closeCursor();
//  }

function add_topic($titre,$message,$membre_id)
{
  require('connect.php');
  $req = $bdd->prepare('INSERT INTO topics(titre,message,membre_id) VALUES(:titre,:message,:membre_id)');
  $req->execute(array('titre'=>$titre, 'message'=>$message, 'membre_id'=>$membre_id));
  $req->closeCursor();
}

 function get_topics()
 {
   require('connect.php');
   $req = $bdd->prepare('SELECT * FROM topics ORDER BY id DESC');
   $req->execute();
   $data = $req->fetchAll();
   return $data;
   $req->closeCursor();
 }

//  function get_topic($id)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT * FROM topics WHERE id=:id');
//    $req->execute(array('id'=>$id));
//    $data = $req->fetch(PDO::FETCH_OBJ);
//    return $data;
//    $req->closeCursor();
//  }

//  function get_auteur_topic($membre_id)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT * FROM membres WHERE id=:membre_id');
//    $req->execute(array('membre_id'=>$membre_id));
//    $data = $req->fetchAll();
//    return $data;
//    $req->closeCursor();
//  }

//  function get_email_auteur($membre_id)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT email FROM membres WHERE id=:membre_id');
//    $req->execute(array('membre_id'=>$membre_id));
//    $data = $req->fetch(PDO::FETCH_OBJ);
//    $email = $data->email;
//    return $email;
//    $req->closeCursor();
//  }

function add_com($message,$membre_id,$topic_id)
{
  require('connect.php');
  $req = $bdd->prepare('INSERT INTO commentaires(message,membre_id,topic_id) VALUES(:message,:membre_id,:topic_id)');
  $req->execute(array('message'=>$message, 'membre_id'=>$membre_id, 'topic_id'=>$topic_id));
  $req->closeCursor();
}

//  function get_com($topic_id)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT * FROM commentaires WHERE topic_id=:topic_id');
//    $req->execute(array('topic_id'=>$topic_id));
//    $data = $req->fetchAll();
//    return $data;
//    $req->closeCursor();
//  }

//  function get_auteur_com($membre_id)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT pseudo FROM membres WHERE id=:membre_id');
//    $req->execute(array('membre_id'=>$membre_id));
//    $data = $req->fetch(PDO::FETCH_OBJ);
//    return $data;
//    $req->closeCursor();
//  }

//  function get_membre_infos($pseudo)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT * FROM membres WHERE pseudo=:pseudo');
//    $req->execute(array('pseudo'=>$pseudo));
//    $data = $req->fetch(PDO::FETCH_OBJ);
//    return $data;
//   $req->closeCursor();
//  }

//  function get_topics_membre($id)
//  {
//    require('config/connect.php');
//    $req = $bdd->prepare('SELECT * FROM topics WHERE membre_id=:id');
//    $req->execute(array('id'=>$id));
//    $data = $req->fetchAll();
//    return $data;
//    $req->closeCursor();
//  }


?>