#!/bin/bash

echo "Delete all containers"
docker rm y2phpfpm
docker rm y2nginx
docker rm y2mysql
docker rm y2redis
docker rm chrome
