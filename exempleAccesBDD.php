<?php
require ('./ConnectionMySQL.php') ;

$sql = "select nom, prenom from ELEVES" ;
$connection = getConnection();
$instructions = $connection->prepare($sql);
$instructions->execute();
$resultat = $instructions->fetchAll() ;
foreach ($resultat as $ligne){
    echo "Le prenom est $ligne[prenom] et le nom de famille est $ligne[nom] <br>";
}
print_r($resultat);

