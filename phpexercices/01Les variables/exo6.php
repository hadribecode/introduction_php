<?php
/*Exercice 6
C'est les soldes. Un t-shirt qui te plaît coûte 785€ à la base mais ce mois-ci, 
ton magasin préféré lui applique une ristourne de 30%. Grâce à tes nouvelles 
connaissances en PHP, affiche le prix de départ, le montant de la ristourne et
 le prix que tu vas payer sur ton navigateur.
*/

    $prix = 785;

    $ristourne = $prix * 0.3;

    $total = $prix - $ristourne;

    echo "le prix du vetement seras de $prix ,la ristourne seras de $ristourne et vous payerez $total";

?>