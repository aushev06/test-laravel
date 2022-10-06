Для развертывания:
- Склонируйте репозиторий и перейдите в эту папку
- Создайте файл .env по аналогии с .env.example
- Выполните команду docker run --rm \
  -u "$(id -u):$(id -g)" \
  -v $(pwd):/var/www/html \
  -w /var/www/html \
  laravelsail/php81-composer:latest \
  composer install --ignore-platform-reqs


- Выполните - ./vendor/bin/sail up -d
- Выполните - ./vendor/bin/sail migrate:fresh --seed
- Сайт работает по адресу - http://localhost

Данные для админки:
test@test.ru
password
