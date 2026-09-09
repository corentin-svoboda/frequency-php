# Fréquence en PHP — mini projet

Ce mini projet montre différentes manières (plus ou moins idiomatiques) de construire un **tableau de fréquences** (histogramme) à partir d’une liste d’éléments en PHP.

## Contenu

- `solutions/01_imperative.php` : boucle impérative classique
- `solutions/02_coalesce.php` : boucle avec opérateur `??`
- `solutions/03_reduce.php` : version fonctionnelle avec `array_reduce`
- `solutions/04_count_values.php` : version native avec `array_count_values`
- `run_all.php` : point d’entrée qui inclut toutes les solutions

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
```

## Build manuel de l’image (optionnel)

```bash
docker build -t frequence-php .
```

Puis exécution d’un script :

```bash
docker run --rm -v "$PWD":/app -w /app frequence-php php solutions/01_imperative.php
```

