<?php 

function agegenre($age,$genre){
    if ($age>=18 && $genre==="homme") {
       return "Vous êtes un homme et vous êtes majeur";
    } elseif ($age<18 && $genre==="homme"){
       return" Vous êtes un homme et vous êtes mineur";
    } elseif ($age>=18 && $genre==="femme"){
        return "Vous êtes une femme et vous êtes majeur";
    } elseif ($age<18 && $genre==="femme"){
        return "Vous êtes une femme et vous êtes mineur";
    }

}

print agegenre(14,"femme")

?>