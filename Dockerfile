FROM php:8.3-cli

WORKDIR /app

COPY . /app

CMD ["php", "run_all.php"]
