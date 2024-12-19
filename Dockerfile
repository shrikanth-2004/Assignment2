# Use an official PHP runtime as a parent image
FROM php:8.0-cli

# Set the working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .

# Expose port 80 to the outside world
EXPOSE 80

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:80"]
