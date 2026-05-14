FROM php:8.4-apache

# 1. Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl gnupg

# 2. Install Node.js 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# 3. Enable Apache Rewrite
RUN a2enmod rewrite

# 4. Set Document Root to /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# 6. Build Assets
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# 7. Setup Database & Permissions
RUN mkdir -p database && touch database/database.sqlite

# CRITICAL: Set ownership for the entire app directory first
RUN chown -R www-data:www-data /var/www/html

# Ensure the web server can enter and read the storage folders
RUN find /var/www/html/storage -type d -exec chmod 775 {} \;
RUN find /var/www/html/storage -type f -exec chmod 664 {} \;

# 8. Create the storage link AS the web user
RUN su -s /bin/sh -c "php artisan storage:link" www-data

EXPOSE 80
CMD ["apache2-foreground"]