# Usa una imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Copia todos los archivos del proyecto al directorio raíz del servidor
COPY . /var/www/html/

# Da permisos necesarios
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 (opcional, Render ya lo hace por ti)
EXPOSE 80
