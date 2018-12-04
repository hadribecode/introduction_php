<?php

if (isset($_POST['resto']) AND isset($_POST['nom']) AND isset($_POST['prenom']) )

{

    
	echo  $_POST['resto'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>