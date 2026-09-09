<?php
declare(strict_types=1);

/**
 * Solution 3: Version fonctionnelle avec array_reduce
 */
function histogram_reduce(array $corbeille): array
{
    return array_reduce(
        $corbeille,
        function (array $liste, mixed $fruit): array {
            $liste[$fruit] = ($liste[$fruit] ?? 0) + 1;
            return $liste;
        },
        []
    );
}

$items = ['pomme', 'banane', 'pomme', 'orange', 'banane', 'pomme'];
echo "Méthode: array_reduce\n";
print_r(histogram_reduce($items));
