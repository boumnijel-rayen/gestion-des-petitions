<?php

session_start();

$num_p = $_POST['code'];
$num_m = $_SESSION['id'];

$c = new connexion();
$dbco = $c->connexion();

$sth = $dbco->prepare("SELECT * FROM editer where num_p=".$num_p." and num_m=".$num_m);
$sth->execute();
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);

if (count($resultat) > 0){
    
}

?>