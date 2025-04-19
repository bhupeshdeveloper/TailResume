# Use official PHP-FPM image for PHP processing
FROM php:8.4-fpm

# Install dependencies for running Node.js and Tailwind CSS
RUN apt-get update && apt-get install -y \
    curl \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && apt-get install -y nodejs npm \
    && npm install -g tailwindcss

# Set working directory for your PHP files
WORKDIR /var/www/html

# Copy the PHP files
COPY ./php /var/www/html

# Copy the node files and install Tailwind dependencies
COPY ./node /app
WORKDIR /app
RUN npm install

# Install Composer (if you need it for PHP)
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Install Nginx for serving the site
RUN apt-get install -y nginx

# Copy Nginx configuration
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

# Expose the port Nginx will run on
EXPOSE 80

# Start both PHP-FPM and Nginx when the container starts
CMD service nginx start && php-fpm
