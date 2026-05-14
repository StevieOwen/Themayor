FROM php:8.4-apache

# 1. Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    gnupg

# 2. Install Node.js 20 (Required for Vite/Tailwind v4 build)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# 3. Enable Apache mod_rewrite
RUN a2enmod rewrite

# 4. Configure Apache Document Root to point to /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# 6. Copy application source
COPY . .

# 7. Install PHP and JS dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# 8. Setup SQLite database
RUN mkdir -p database && touch database/database.sqlite

# 9. CRITICAL FIX: Permissions and Symbolic Link
# First, ensure Apache owns the entire project directory
RUN chown -R www-data:www-data /var/www/html

# Set directory permissions to 775 (Allow entrance) and files to 664 (Allow reading)
RUN find /var/www/html/storage -type d -exec chmod 775 {} \;
RUN find /var/www/html/storage -type f -exec chmod 664 {} \;
RUN chmod -R 775 /var/www/html/bootstrap/cache

# Remove any existing link/folder in public and recreate it as the web user
RUN rm -rf public/storage && su -s /bin/sh -c "php artisan storage:link" www-data

# 10. Expose port and start Apache
EXPOSE 80
CMD ["apache2-foreground"]