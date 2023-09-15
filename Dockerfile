# Use the official Laravel Sail image as the base image
FROM laravelsail/php80-composer:latest

# Set the working directory in the container
WORKDIR /var/www

# Copy the Laravel application files into the container
COPY . .

# Install composer dependencies
RUN composer install

# Set permissions for the storage and bootstrap directories
RUN chmod -R 777 storage bootstrap/cache

# Expose the port used by Laravel Sail (usually 80 or 8000)
EXPOSE 80

# Start the Laravel development server
CMD ["php", "artisan", "serve"]
