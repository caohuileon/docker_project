# docker_project
This repo initial a clean docker-compose project with Bootstrap4.1 + Django3.0 + MySQL8.0 + PhpMyAdmin7.4 + Jenkins module

Docker environment integrated Python 3.8.2

Note: Default Jenkins service is commented in dev.yml, you can enable it according to your requirement 

# build
 - Goto: your_path/docker_project/clean_docker
 - docker-compose -f dev.yml build

# start
 - Goto: your_path/docker_project/clean_docker
 - docker-compose -f dev.yml up --remove-orphans

# enter container
 docker exec -it 434633a230c7 /bin/bash

# Web UI
 - Home page: http://[your VM ip]:8888
 - Database: http://[your VM ip]:8882
