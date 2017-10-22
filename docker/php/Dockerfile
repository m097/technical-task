FROM php:7.1-cli-jessie
MAINTAINER Andrey Znamen <andriy.znamen@gmail.com>

RUN apt-get -y update && apt-get -y install \
    git \
    zip unzip
RUN curl -so /bin/composer https://getcomposer.org/download/1.3.2/composer.phar && \
    chmod a+rx /bin/composer

RUN useradd -ms /bin/bash user
USER user

RUN echo 'alias phpunit="/var/www/app/vendor/bin/phpunit"' >> ~/.bashrc
RUN echo 'alias app:run="php /var/www/app/public/index.php"' >> ~/.bashrc

VOLUME ["/var/www/app"]
WORKDIR /var/www/app

CMD php
