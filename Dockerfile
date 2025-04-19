# Dockerfile
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y nginx curl unzip libpng-dev libjpeg-dev libfreetype6-dev

# Configure working directory
WORKDIR /var/www/html

# Copy PHP files
COPY ./php /var/www/html

# Copy Nginx config
COPY ./nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./nginx/conf.d /etc/nginx/conf.d

# Expose ports
EXPOSE 80

# Start PHP-FPM and Nginx
CMD service php8.2-fpm start && nginx -g 'daemon off;'
