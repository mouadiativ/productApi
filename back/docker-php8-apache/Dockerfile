# Use the PHP 8.2 Apache image as the base image
FROM php:8.2-apache

# Install necessary PHP extensions and utilities
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install intl pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# composer installation
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the Symfony project files
COPY . .

# Set permissions for the var directory
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80


