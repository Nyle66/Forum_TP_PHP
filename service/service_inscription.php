<?php
session_start();

require('../config/connect.php');
require('../config/fonctions.php');

if(check_session())
{
  header('Location: index.php');
}

$title = 'Inscription';

if(!empty($_POST))
{
  extract($_POST);
  
  $valid = (empty($pseudo) || empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) || empty($pass)) ? false : true;
  
  $erreurpseudo = (empty($pseudo)) ? 'Chosissez un pseudo' : '';
  $erreuremail = (empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)) ? 'Indiquez un email valide' : '';
  $erreurpass = (empty($pass)) ? 'Choisissez un mot de passe' : '';
  
  if($valid == true)
  {
    $pseudo = strip_tags($pseudo);
    $email = strip_tags($email);
    $pass = strip_tags($pass);
    
    if(!check_pseudo($pseudo))
    {
      $valid = false;
      $erreurpseudo = 'Ce pseudo est pris';
      header('Location: ../index.php?page=header');
    }
    
    if(!check_email($email))
    {
      $valid = false;
      $erreuremail = 'Cet email correspond a un membre';
      header('Location: ../index.php?page=header');
    }
    
    else
    {
      // $to = $email;
      // $subject = 'Inscription';
      // $message = '<h4>Bonjour '.ucwords($pseudo).'</h4>
      // <p>Vous �tes maintenant membre du forum</p>
      // <p>Voici vos identifiants :<br />
      // Login : <b>'.$pseudo.'</b><br />
      // Mot de passe : <b>'.$pass.'</b></p>
      // <p>A bient�t sur le forum</p>';
      
      // $headers = 'From:noreply@forum.com'."\r\n";
      // $headers.='MIME-version: 1.0'."\r\n";
      // $headers.='Content-type: text/html; charset=utf-8'."\r\n";
      // mail($to,$subject,$message,$headers);
      
      add_membre($pseudo,$email,$pass);
      header('Location: ../index.php?page=login');
      
      // $success = 'Inscritpion reussie';
      // unset($pseudo); unset($email); unset($pass);
    }
  }
}

?>