<?php
declare(strict_types=1);

/**
 * Solution 2: Approche idiomatique avec null coalescing (??)
 */
function histogram_coalesce(array $corbeille): array
{
    $liste = [];

    foreach ($corbeille as $fruit) {
        $liste[$fruit] = ($liste[$fruit] ?? 0) + 1;
    }

    return $liste;
}

$items = ['pomme', 'banane', 'pomme', 'orange', 'banane', 'pomme'];
echo "Méthode: valeur par défaut avec ??\n";
print_r(histogram_coalesce($items));
