up:
	docker-compose up

down:
	docker-compose down

build:
	docker-compose build

prune:
	docker system prune -a

rm_volumes:
	docker ps -aq | xargs docker rm -fv && docker volume ls -q | xargs docker volume rm