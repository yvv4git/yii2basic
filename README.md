# Yii2 basic with xdebug and selenium

1. Создаем дирикторию для проекта.

mkdir -p /var/www/dy2


2. Клонируем репозиторий.

cd /var/www/dy2

git clone https://github.com/yvv4git/yii2basic


3. Docker.

./build.sh

./permissions.sh

./start.sh


4. IDE

ln -s /var/www/dy2/ /home/yvv/PhpstormProjects/yii2d/

Это необходимо, чтобы в ide-шке можно было редактировать файлы.

5. Stop.

./stop.sh