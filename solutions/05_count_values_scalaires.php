<?php
declare(strict_types=1);

$valeurs = [true, false, 1.5, 1, '1'];
$cles = array_map(
    static fn (mixed $valeur): string => match (true) {
        is_bool($valeur) => $valeur ? 'true' : 'false',
        is_float($valeur) => (string) $valeur,
        is_int($valeur) => (string) $valeur,
        is_string($valeur) => $valeur,
        default => throw new InvalidArgumentException('Valeur non prise en charge'),
    },
    $valeurs
);
echo "Cas 1 : valeurs simples normalisées par type\n";
print_r(array_count_values($cles));
