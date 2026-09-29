# Fréquence en PHP — mini projet

Ce mini projet montre différentes manières (plus ou moins idiomatiques) de construire un **tableau de fréquences** (histogramme) à partir d’une liste d’éléments en PHP.

## Contenu

- `solutions/01_imperative.php` : boucle impérative classique
- `solutions/02_coalesce.php` : boucle avec opérateur `??`
- `solutions/03_reduce.php` : version fonctionnelle avec `array_reduce`
- `solutions/04_count_values.php` : version native avec `array_count_values`
- `solutions/05_count_values_scalaires.php` : normalisation des valeurs simples par type
- `solutions/06_count_values_structures.php` : extraction du fruit de tableaux et d'objets
- `run_all.php` : point d’entrée qui inclut toutes les solutions

`array_count_values` ne compte directement que les entiers et les chaînes.
Un booléen, `null` ou un float dans la liste provoque un avertissement et est ignoré ;
les chaînes numériques peuvent aussi partager la même clé qu'un entier. Le cas 5
construit des clés distinctes pour booléens, floats, entiers et chaînes ; le cas 6 extrait
explicitement le fruit des structures avant le comptage.

## Prérequis

- Docker
- Docker Compose (commande `docker compose`)

## Lancer tous les exemples

```bash
docker compose up --build
```

ou

```bash
docker compose run --rm php
```

## Lancer les scripts un par un

```bash
docker compose run --rm php php solutions/01_imperative.php
docker compose run --rm php php solutions/02_coalesce.php
docker compose run --rm php php solutions/03_reduce.php
docker compose run --rm php php solutions/04_count_values.php
docker compose run --rm php php solutions/05_count_values_scalaires.php
docker compose run --rm php php solutions/06_count_values_structures.php
```

## Build manuel de l’image (optionnel)

```bash
docker build -t frequence-php .
```

Puis exécution d’un script :

```bash
docker run --rm -v "$PWD":/app -w /app frequence-php php solutions/01_imperative.php
```
