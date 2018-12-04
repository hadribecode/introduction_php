<?php


function LongestWord($send = "bonjour ceci est un supergigatest d'un supergagotast") {
$max_longueur="0";
$array = explode(" ", $send);
$nb_mots = count($array);
    for($i = 0; $i < $nb_mots; $i++) {
$longueur= strlen($array[$i]);
    if($max_longueur<$longueur) {
$max_longueur=$longueur;
$le_mot=$array[$i];
    }
}
echo"$le_mot";
}
echo LongestWord();





// CE CODE NE PREND PAS LE PREMIER MOT LE PLUS LONG

$string = 'hey ceci est un supergiga test supergago'; 

$parts  = explode( ' ', $string ); 

array_multisort( 
    array_map( 'strlen', $parts ), 
    SORT_DESC, 
    SORT_NUMERIC,
    
    $parts 
); 

$longeur = reset( $parts ); 

var_dump( $longeur ); // string(12) "superchat"  
*/









/*
function LongestWord($send = array()) {
 
    if(!empty($send)){
        $lengths = array_map('strlen', $send);
        $maxLength = max($lengths);
        $key = array_search($maxLength, $lengths);
        return array('length' => $maxLength,'key' => $key,'string'=>$send[$key]);
    }
}
 
$arrData = array("c'est un test", "Bonjour", "Quel est ton prénom?");
 

print_r(LongestWord($arrData));
 */

?>