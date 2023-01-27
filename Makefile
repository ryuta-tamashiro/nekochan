container=app

init:
	cp src/.env.local src/.env
	docker-compose up -d
	sleep 6
	docker-compose exec $(container) composer install
	docker-compose exec $(container) php artisan key:generate
	docker-compose exec $(container) php artisan migrate
	docker-compose exec $(container) php artisan db:seed --class=NekochanSeeder

up:
	docker-compose up -d

down:
	docker-compose down

test:
	docker-compose exec $(container) vendor/bin/phpunit tests

coverage:
	docker-compose exec $(container) vendor/bin/phpunit --coverage-text tests

coverage-html:
	docker-compose exec $(container) vendor/bin/phpunit --coverage-html $(DIRECTORY) tests

cs-check:
	docker-compose exec $(container) vendor/bin/composer cs-check

cs-fix:
	docker-compose exec $(container) vendor/bin/composer cs-fix

composer:
	docker-compose exec $(container) composer $(COMMAND)

.PHONY: artisan
artisan:
	docker-compose exec $(container) php artisan $(COMMAND)

tinker:
	docker-compose exec $(container) php artisan tinker

migrate:
	docker-compose exec $(container) composer dump-autoload
	docker-compose exec $(container) php artisan migrate:refresh --database=nekochan --seed

helper:
	docker-compose exec $(container) php artisan ide-helper:generate
	docker-compose exec $(container) php artisan ide-helper:models
	docker-compose exec $(container) php artisan ide-helper:meta
