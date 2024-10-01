FROM php:7.4-fpm

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia los archivos de tu aplicación
COPY . .

# Instala las extensiones PHP necesarias para FuelPHP
RUN docker-php-ext-install pdo_mysql mysqli

# Genera el locale si no existe
RUN sudo locale-gen en_US.UTF-8 || true

# Establece la codificación de caracteres
ENV LANG en_US.UTF-8
ENV LC_ALL en_US.UTF-8

# Exponer el puerto por el que escucha PHP-FPM
EXPOSE 9000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]