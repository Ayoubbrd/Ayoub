<?php

require ('./ConnectionMySQL.php') ;

$nom = 'Ben Rached';
$prenom = 'Ayoub';
$connection = getConnection(); //préparer la connexion
$statement = $connection->prepare("INSERT INTO eleves(nom, prenom) VALUES(:nom, :prenom)"); //préparer la requête SQL
$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$statement->execute();
?>