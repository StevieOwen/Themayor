# Use PHP 8.4 with Apache for modern dependency support
FROM php:8.4-apache

# Install system dependencies, Node.js, and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    gnupg

# Install Node.js 20.x (Current LTS for Vite/Tailwind builds)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Install Composer from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Copy all project files into the container
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install NPM dependencies and compile Tailwind/Vite assets
# This creates the public/build/manifest.json file
RUN npm install && npm run build

# Create an empty SQLite database file to prevent 500 errors
RUN mkdir -p database && touch database/database.sqlite

# Set correct permissions for Laravel directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Configure Apache to serve from the 'public' directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Expose port 80 for Render's web service
EXPOSE 80