FROM php:8.3.36-apache

LABEL org.opencontainers.image.source=https://github.com/MatthiasRuf1337/paddle

RUN a2enmod rewrite headers expires && \
    sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

COPY . /var/www/html/

RUN rm -rf /var/www/html/ANLEITUNG.md /var/www/html/CLAUDE.md /var/www/html/tests /var/www/html/k8s && \
    rm -f /var/www/html/inc/smtp-config.php /var/www/html/inc/turnstile-config.php /var/www/html/inc/orgame-config.php && \
    chown -R www-data:www-data /var/www/html

EXPOSE 80
