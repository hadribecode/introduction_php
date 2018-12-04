<?php 

$tableau = array(
    (01)=>"Ain",
    (03)=>"Allier",
    (07)=>"Ardèche",
    (15)=>"Cantal",
    (26)=>"Drôme",
    (38)=>"Isère",
    (42)=>"Loire",
    (43)=>"Haute-Loire",
    (63)=>"Puy-de-Dôme",
    (69)=>"Rhône",
    (73)=>"Savoie",
    (74)=>"Haute-Savoie");


    //COMMENT AJOUTER LE NUMERO DE DEPARTEMENT????????
$tableau[] = "Metz";

foreach ($tableau as $key => $value) {
    echo "Le département" . " " . "{$value}" . " " . "à le numéro" . " " . "{$key}". "<br>";
}




echo $tableau[69];




?>

<br>