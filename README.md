# docker_project
This repo initial a clean docker-compose project with Bootstrap4.1 + Django3.0 + MySQL8.0 + PhpMyAdmin7.4 + Jenkins module

# build
 docker-compose -f dev.yml build

# start
 docker-compose -f dev.yml up --remove-orphans

# enter container
 docker exec -it 434633a230c7 /bin/bash

# Web UI
 - Home page: http://[your VM ip]:8888
 - Database: http://[your VM ip]:8882
