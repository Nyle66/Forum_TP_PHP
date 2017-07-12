<?php

function getConnection(){
    try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum','root','root') or die(print_r($bdd->errorInfo()));
    $bdd->exec('SET NAMES utf8');
    return $bdd;
    } catch(Exeption $e){
        die('Erreur:'.$e->getMessage());
    }
}

?>