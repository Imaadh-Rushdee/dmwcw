# Use an official PHP image with Apache
FROM php:8.1-apache

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Set the working directory inside the container
WORKDIR /var/www/Course_Work/

# Copy your project files into the container
COPY . /var/www/Course_Work/

# Enable Apache mod_rewrite (if using frameworks like Laravel)
RUN a2enmod rewrite

# Expose the port Apache will run on (usually 80)
EXPOSE 80

# Set the default command to run Apache in the foreground
CMD ["apache2-foreground"]
