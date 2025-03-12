<?php

echo ("- Homme --> 1 \n- Femme --> 2 \n");
$sexe = readline(" Veuillez rensigner votre sexe en fonction de l'index : ");
$age  = readline(" Veuillez rensigner votre age : ");


while (!is_int($sexe) || !is_int($age)) {
    if (!is_int($sexe)) {
        echo ("Erreur, la saisie n'est pas un nombre enteir \n");
        $sexe = readline("Veuillez rensigner votre sexe en fonction de l'index : ");
        break;
    } else if (!is_int($age)) {
        echo ("Erreur, la saisie n'est pas un nombre enteir \n");
        $age  = readline("Veuillez rensigner votre age : ");
        break;
    }
}



if ($sexe == 1 && $age > 20 || $sexe == 2 && $age > 18 && $age < 35) {
    echo ("Vous allez payer des impôts.");
} else {
    echo ("Vous ne payerai pas d'impôts.");
}
