# Debian 10 (Buster)
# https://hub.docker.com/_/wordpress/
FROM wordpress:5-php7.3-apache

# Installing composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installing Node & Yarn
# https://github.com/nodesource/distributions/blob/master/README.md
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install -y nodejs && apt-get install -y yarn