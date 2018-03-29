#!/bin/bash
sudo rm -r app/cache/dev
cd ..
sudo chmod -R 777 /var/www/html/Alphabus
sudo chmod -R 777 /var/www/html/Alphabus/*
cd Alphabus/
git add .
