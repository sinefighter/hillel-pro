default: php

php:
	docker exec -it php_php-pro-4 bash

up:
	docker compose up -d

down:
	docker compose down

.PHONY: bash up