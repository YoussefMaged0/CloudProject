
# Use the official PHP with Apache base image
FROM php:apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo pdo_mysqli

# Enable Apache rewrite module
RUN a2enmod rewrite

# Restart Apache service
RUN service apache2 restart

# Expose port 80 
EXPOSE 80


# Set the command to start Apache
CMD ["apache2-foreground"]
