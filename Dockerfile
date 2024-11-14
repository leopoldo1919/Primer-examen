# Utilitza una imatge base de PHP amb Apache
FROM php:8.1-apache

# Instal·la extensions necessàries per treballar amb MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia els fitxers de l'aplicació al directori web
COPY ./html/ /var/www/html/

# Configura permisos per al directori web
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exposa el port 80 per accedir al servidor web
EXPOSE 80
