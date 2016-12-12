FROM alpine:latest

RUN echo "http://dl-4.alpinelinux.org/alpine/edge/main" > /etc/apk/repositories
RUN echo "http://dl-4.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories

RUN apk add --update \
    php7 \
    php7-opcache \
    php7-openssl \
    php7-pdo \
    php7-json \
    php7-phar \
    php7-dom \
    php7-pdo_sqlite	\
    php7-mbstring \
    php7-session \
    php7-ctype \
    && rm -rf /var/cache/apk/*

RUN mv /usr/bin/php7 /usr/bin/php

COPY . /app

WORKDIR /app/public

EXPOSE 8090

RUN php /app/artisan migrate:refresh --seed

CMD ["php","-S","0.0.0.0:8090"]
