<?php
$nom_professeur = "Robert" ;
$prenom_professeur = "Timothee" ;
$lien_script = "EXPL1_avisProfesseur.php?nomProf=$nom_professeur&prenomProf=$prenom_professeur" ;
echo "<a href='$lien_script'> Qui est le plus sévère des professeurs ? </a> <BR>" ;

$nom_delegue = "Beaudoux" ;
$prenom_delegue = "Camille" ;
$lien_script_delegue = "EXPL1_nomDelegue.php?nomD=$nom_delegue&prenomD=$prenom_delegue";

echo "<a href='$lien_script_delegue'> Qui est le delegue ?</a>"

?>
