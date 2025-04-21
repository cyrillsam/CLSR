# Use an official PHP + Apache image
FROM php:8.1-apache

# Enable mod_rewrite (common for frameworks or pretty URLs)
RUN a2enmod rewrite

# Copy everything from your current folder to the web root
COPY . /var/www/html/

# Optional: Set permissions (depends on your use case)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Render looks for a web server)
EXPOSE 80
