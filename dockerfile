FROM php:8.2-apache

# Copiar archivos del proyecto al contenedor
COPY . /var/www/html/

# Dar permisos correctos
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Habilitar módulos PHP comunes (opcional, por si usas MySQL, etc.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80
