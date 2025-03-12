<?php

$age        = readline("Entrer votre age : ");
$permis     = readline("Entrer votre durée de permis : ");
$anciennete = readline("Entrer votre ancienneté : ");
$accident   = readline("Entrer vos nombre d'accident : ");
$points     = 0;
$tarif;



// Calcul des points en fonction de l'âge

if ($age < 25) {
    // Pas de points ajoutés

} else {
    $points++;
}




// Calcul des points en fonction de la durée du permis

if ($permis == 0) {
    $points = 0;
} elseif ($permis < 2) {
    // Pas de points ajoutés
} else {
    $points++;
}



// Calcul des points en fonction de l'ancienneté

if ($anciennete < 2) {
    // Pas de points ajoutés
} else {
    $points++;
}



// Calcul des points en fonction du nombre d'accidents

if ($accident == 0) {
    // Pas de points retirés
} elseif ($accident == 1) {
    $points--;
} else {
    $points -= 2;
}



// Détermination du tarif en fonction des points
if ($points < 0) {
    $tarif = "Blacklist";
} elseif ($points == 0) {
    $tarif = "rouge";
} elseif ($points == 1) {
    $tarif = "orange";
} elseif ($points == 2) {
    $tarif = "vert";
} else {
    $tarif = "bleu";
}

echo ("Selon le barême, vous êtes en : " . $tarif);


// <?php

// function calculerPoints($age, $permis, $anciennete, $accident) {
//     $points = 0;

//     // Calcul des points en fonction de l'âge
//     if ($age >= 25) {
//         $points++;
//     }

//     // Calcul des points en fonction de la durée du permis
//     if ($permis >= 2) {
//         $points++;
//     }

//     // Calcul des points en fonction de l'ancienneté
//     if ($anciennete >= 2) {
//         $points++;
//     }

//     // Calcul des points en fonction du nombre d'accidents
//     if ($accident == 1) {
//         $points--;
//     } elseif ($accident > 1) {
//         $points -= 2;
//     }

//     return $points;
// }

// function determinerTarif($points) {
//     if ($points < 0) {
//         return "Blacklist";
//     } elseif ($points == 0) {
//         return "rouge";
//     } elseif ($points == 1) {
//         return "orange";
//     } elseif ($points == 2) {
//         return "vert";
//     } else {
//         return "bleu";
//     }
// }

// $age        = readline("Entrer votre age : ");
// $permis     = readline("Entrer votre durée de permis : ");
// $anciennete = readline("Entrer votre ancienneté : ");
// $accident   = readline("Entrer vos nombre d'accident : ");

// $points = calculerPoints($age, $permis, $anciennete, $accident);
// $tarif = determinerTarif($points);

// echo "Selon le barême, vous êtes en : " . $tarif;