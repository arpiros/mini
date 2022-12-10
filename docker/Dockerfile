# syntax=docker/dockerfile:experimental

ARG PHP_VERSION
ARG COMPOSER_VERSION
FROM composer:${COMPOSER_VERSION} AS composer

FROM php:${PHP_VERSION} as local
WORKDIR /product/mini
ENV TIMEZONE=asia/Tokyo

RUN apt update \
    && apt install -y git \
    && docker-php-source extract \
    && pecl install xdebug \
    && docker-php-ext-enable \
    xdebug \
    && ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone

COPY --from=composer /usr/bin/composer /usr/bin/composer
