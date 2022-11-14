<?php

$matieresSIO = array('Mathématiques', 'Bloc 1',
'Bloc 2', 'Bloc 3', 'Anglais', 'Culture générale',
'Algorithmique', 'Culture Economique Juridique & managériale',
'PIX', 'Parcours professionnel');

echo "<BR>" ;
foreach ($matieresSIO as $uneMatiere) {
    echo "C'est nul quel rigolo $uneMatiere ! <BR>" ;}

    print_r($matieresSIO);
    echo "<BR>" ;
    unset($matieresSIO[1]);
    echo "<BR>" ;
    print_r($matieresSIO);
