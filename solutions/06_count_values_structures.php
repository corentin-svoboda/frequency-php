<?php
declare(strict_types=1);

$articles = [
    ['details' => ['fruit' => 'pomme']],
    (object) ['details' => (object) ['fruit' => 'banane']],
    ['details' => ['fruit' => 'pomme']],
];
$fruits = array_map(
    static fn (array|stdClass $article): string => is_array($article)
        ? $article['details']['fruit']
        : $article->details->fruit,
    $articles
);
echo "Cas 2 : tableaux et objets regroupés par fruit\n";
print_r(array_count_values($fruits));
