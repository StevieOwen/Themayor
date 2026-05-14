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

# 7. CRITICAL FIX: Initialize Database & Permissions BEFORE linking
RUN mkdir -p database && touch database/database.sqlite

# Give Apache ownership of the entire project first
RUN chown -R www-data:www-data /var/www/html

# Set specific write permissions for the storage/cache folders
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Create the link as the www-data user to ensure access
RUN sudo -u www-data php artisan storage:link

EXPOSE 80
CMD ["apache2-foreground"]