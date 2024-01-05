up:
	docker compose up -d
down:
	docker compose down
php-bash:
	docker compose exec php-coffee-shop bash
php-logs:
	docker compose logs php-coffee-shop
redis-bash:
	docker compose exec redis-coffee-shop bash
redis-logs:
	docker compose logs redis-coffee-shop
vendor:
	docker compose exec php-coffee-shop bash -c "composer install"
