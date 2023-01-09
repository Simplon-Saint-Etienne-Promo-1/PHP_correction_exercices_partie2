<?php
$age = 17;
$gender = "Pomme";

if($gender == "Homme") {
    if($age >= 18) {
        echo "Vous êtes un homme majeur";
    } else {
        echo "Vous êtes un homme mineur";
    }
} else if ($gender == "Femme") {
    if($age >= 18) {
        echo "Vous êtes un femme majeur";
    } else {
        echo "Vous êtes un femme mineur";
    }
} else {
    if($age >= 18) {
        echo "Vous êtes d'un autre genre et vous êtes majeur";
    } else {
        echo "Vous êtes d'un autre genre et vous êtes mineur";
    }
}