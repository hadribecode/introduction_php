<?php

if (isset($_GET['nom']) AND isset($_GET['prenom']) )

{
    
	echo  $_GET['nom'] . ' ' . $_GET['prenom'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>