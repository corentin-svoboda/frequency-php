<?php
declare(strict_types=1);

/**
 * Solution 1: Approche impérative classique
 */
function histogram_imperative(array $corbeille): array
{
    $liste = [];

    foreach ($corbeille as $fruit) {
        if (isset($liste[$fruit])) {
            $liste[$fruit]++;
        } else {
            $liste[$fruit] = 1;
        }
    }

    return $liste;
}

$items = ['pomme', 'banane', 'pomme', 'orange', 'banane', 'pomme'];
echo "Méthode: impérative classique\n";
print_r(histogram_imperative($items));
