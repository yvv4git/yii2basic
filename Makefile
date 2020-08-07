start:
	docker-compose up -d
	
stop:
	docker-compose stop
	
restart:
	docker-compose restart
	
rebuild:
	docker-compose up -d --no-deps --build

clear:
	docker-compose stop
	docker rm y2phpfpm
	docker rm y2nginx
	docker rm y2mysql
	docker rm y2redis
	docker rm chrome
