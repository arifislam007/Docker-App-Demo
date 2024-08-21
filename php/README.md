---

# PHP-Apache Docker Container

This project demonstrates how to set up a basic PHP application running on an Apache server inside a Docker container. The container serves the application on port 80.

## Project Structure

- **Dockerfile**: Defines the Docker image configuration.
- **PHP Application Files**: Place your PHP files in the current directory to be copied into the container.

## Getting Started

Follow the steps below to build and run the Docker container.

### Prerequisites

- Docker installed on your machine.
- Basic knowledge of Docker and PHP.

### Project Files

- **Dockerfile**:
  ```dockerfile
  # Use an official PHP runtime as a parent image
  FROM php:7.4-apache

  # Set the working directory to /var/www/html
  WORKDIR /var/www/html

  # Copy the current directory contents into the container at /var/www/html
  COPY . /var/www/html

  # Expose port 80 for Apache
  EXPOSE 80

  # CMD specifies the command to run on container startup
  CMD ["apache2-foreground"]
  ```

### Building the Docker Image

1. Clone this repository to your local machine:

   ```sh
   git clone https://github.com/arifislam007/Docker-App-Demo.git
   cd Docker-App-Demo/php
   ```

2. Build the Docker image using the Dockerfile provided:

   ```sh
   docker build -t php-apache-server .
   ```

### Running the Container

After building the image, you can run it with the following command:

```sh
docker run -p 80:80 php-apache-server
```

This will start the Apache server with your PHP application inside a Docker container, mapping port 80 on your host to port 80 in the container.

### Accessing the Server

Once the container is running, you can access the server by navigating to:

```
http://localhost
```

Your PHP application should be served at this address.

## Conclusion

This project provides a basic example of how to run a PHP application with an Apache server inside a Docker container. You can customize and extend this setup according to your project needs.

---

