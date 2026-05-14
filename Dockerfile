FROM php:8.4-apache

# 1. Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl gnupg

# 2. Install Node.js 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# 3. Enable Apache Rewrite
RUN a2enmod rewrite

# 4. Set Document Root to /public (CRITICAL FIX)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# 6. Build Assets (Tailwind v4)
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build
RUN php artisan storage:link

# 7. Initialize Database & Permissions
RUN mkdir -p database && touch database/database.sqlite
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/public

EXPOSE 80
CMD ["apache2-foreground"]