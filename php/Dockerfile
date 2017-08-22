FROM php:7.2.0beta3-fpm-alpine

RUN apk add --no-cache autoconf g++ make openssl-dev pcre-dev && \
    pecl install mongodb && \
    docker-php-ext-enable mongodb

COPY www/ /www
