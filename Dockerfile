# Use PHP 8.4 with Apache to match your dependency requirements
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

# Install Node.js 20.x (Essential for Vite/Tailwind build)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build Vite/Tailwind assets to resolve the 404s seen in your logs
RUN npm install && npm run build

# Create SQLite file to prevent session/database errors
RUN mkdir -p database && touch database/database.sqlite

# Set permissions for web server
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/public

# Point Apache to the /public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Standard Apache port
EXPOSE 80

# THE START COMMAND: This is what Render runs automatically
CMD ["apache2-foreground"]