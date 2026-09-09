<?php
declare(strict_types=1);

/**
 * Solution 4: Solution native avec array_count_values
 * Fonctionne directement avec des strings/ints.
 */
function histogram_count_values(array $corbeille): array
{
    return array_count_values($corbeille);
}

$items = ['pomme', 'banane', 'pomme', 'orange', 'banane', 'pomme'];
echo "Méthode: array_count_values\n";
print_r(histogram_count_values($items));
