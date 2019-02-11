#!/bin/bash

sudo chown -R yvv:root app/
find ./app/ -type f -exec chmod 665 {} \;
find ./app/ -type d -exec chmod 777 {} \;
