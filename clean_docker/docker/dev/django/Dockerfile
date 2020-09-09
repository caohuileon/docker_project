FROM python:3.8.2

COPY requirements.txt /requirements.txt
COPY ./docker/dev/django/start.sh /start.sh

RUN pip install --upgrade setuptools
RUN pip install --no-cache-dir -r requirements.txt


EXPOSE 80
WORKDIR /code

