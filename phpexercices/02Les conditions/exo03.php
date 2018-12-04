<?php 

$age = 18;

$genre = 'femme';

if ($age >= 18 && $genre === 'homme') {
    echo "Vous êtes un homme et vous êtes majeur";
}  
else if ($age >= 18 && $genre === 'femme') {
    echo "Vous êtes un femme et vous êtes majeur";
}
else if ($age < 18 && $genre === 'homme') {
    echo "Vous êtes un homme et vous êtes mineur";
}
else if ($age < 18 && $genre === 'femme') {
    echo "Vous êtes un femme et vous êtes minieur";
}   

?>