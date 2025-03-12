<?php

// $monTableau = [];
// $N = readline("Veuillez saisir le degré : ");

// for ($i = 1; $i <= $N; $i = $i + 1) {
//     for ($j = 1; $j <= $i; $j++) {
//         if ($j == 1) {
//             $monTableau[$i][$j] = 1;
//         } elseif ($j == $i) {
//             $monTableau[$i][$j] = 1;
//         } else {
//             $monTableau[$i][$j] = $monTableau[$i - 1][$j - 1] + $monTableau[$i - 1][$j];
//         }
//         echo ($monTableau[$i][$j]);
//     }
//     echo ("\n");
// }

$nombre_minimal = readline("Veuillez saisir le nombre minimal pour la plage : ");
$nombre_maximal = readline("Veuillez saisir le nombre maximal pour la plage : ");
$nombre_aleatiore = rand($nombre_minimal, $nombre_maximal);
$compteur = 1;
$nbre_essaie = 5;



$nombre_utilisateur = readline("Veuillez saisir un nombre: ");

while ($nombre_utilisateur != $nombre_aleatiore && $nbre_essaie - 1  > 0) {
    if ($nombre_utilisateur < $nombre_aleatiore) {
        $compteur++;
        $nbre_essaie--;
        echo ("Le nombre est plus grand \n");
    } else if ($nombre_utilisateur > $nombre_aleatiore) {
        $compteur++;
        $nbre_essaie--;
        echo ("Le nombre est plus petit \n");
    }
    echo ("Il vous reste " . $nbre_essaie . " d'essais ");
    $nombre_utilisateur = readline("Veuillez saisir un nombre: ");
}

if ($nombre_utilisateur == $nombre_aleatiore && $nbre_essaie > 0) {
    echo ("bravo vous avez trouvé en " . $compteur . " d'essaie !! ;) \n");
    echo (" Il vous restes encore " . $nbre_essaie . " d'essaies a la fin. ");
} else {
    echo ("Dommage, vous n'avez pas trouver le nombre " . $nombre_aleatiore . " :( ");
}
