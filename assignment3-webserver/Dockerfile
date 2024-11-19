# Use the official PHP image with Apache
FROM php:7.4-apache

# Copy the PHP application code into the container
COPY index.php /var/www/html/
COPY config.json /var/www/html/

# Expose port 8081
EXPOSE 8081

# Change the default Apache port to 8081
RUN sed -i 's/80/8081/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Start the Apache server
CMD ["apache2-foreground"]