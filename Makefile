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
	docker rm yii2phpfpm
	docker rm yii2nginx
	docker rm yii2mysql
	docker rm yii2redis
	docker rm chrome
