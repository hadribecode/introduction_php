<?php

if (isset($_POST['nom']) AND isset($_POST['prenom']) )

{

    
	echo  $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>