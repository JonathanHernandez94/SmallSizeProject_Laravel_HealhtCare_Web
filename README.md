Installation Steps:
(Assuming Docker/Docker-Comopose are already installed)

- cp .env.example .env
- docker-compose up -d
- docker exec -it laravel_healthcare_api_laravel.test_1 bash
- composer install
- composer update
- npm install
- php artisan migrate
- exit
- docker-compose down
- docker-compose up -d
- php artisan migrate (re-runs migrations)
- npm run dev
