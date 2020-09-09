#!/bin/bash
set -e

python -c "from MySQLdb import _mysql; _mysql.connect(host='$DATABASE',user='$DB_USER',passwd='$DB_PASSWD',db='$DATABASE');"

python /code/manage.py makemigrations
python /code/manage.py migrate
python /code/manage.py runserver 0.0.0.0:80

