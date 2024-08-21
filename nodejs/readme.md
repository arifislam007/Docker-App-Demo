This is simple Nodejs Project to dockerize 

---

# Simple Node.js HTTP Server with Docker

This project demonstrates how to set up a basic Node.js HTTP server inside a Docker container. The server listens on port 4000 and responds with "Hello World" to incoming requests.

## Project Structure

- **Dockerfile**: Defines the Docker image configuration.
- **server.js**: A simple Node.js script that creates an HTTP server.

## Getting Started

Follow the steps below to build and run the Docker container.

### Prerequisites

- Docker installed on your machine.
- Basic knowledge of Docker and Node.js.

### Project Files

- **Dockerfile**: 
  ```dockerfile
  FROM node:14
  WORKDIR /app
  RUN npm install
  COPY . /app/
  EXPOSE 4000
  CMD ["node", "server"]
  ```

- **server.js**:
  ```javascript
  var http = require('http')

  var port = 4000

  var server = http.createServer(function (request, response) {
    response.writeHead(200, {'Content-Type': 'text/plain'})
    response.end('Hello World\n')
  })

  server.listen(port)

  console.log('Server running at http://localhost:' + port)
  ```

### Building the Docker Image

1. Clone this repository to your local machine:

   ```sh
   git clone https://github.com/yourusername/your-repo-name.git
   cd your-repo-name
   ```

2. Build the Docker image using the Dockerfile provided:

   ```sh
   docker build -t simple-node-server .
   ```

### Running the Container

After building the image, you can run it with the following command:

```sh
docker run -p 4000:4000 simple-node-server
```

This will start the Node.js server inside a Docker container, mapping port 4000 on your host to port 4000 in the container.

### Accessing the Server

Once the container is running, you can access the server by navigating to:

```
http://localhost:4000
```

You should see the message "Hello World" displayed in your browser.

## Conclusion

This project serves as a simple example of how to containerize a Node.js application using Docker. Feel free to customize and extend this setup according to your needs.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Replace the placeholder `yourusername/your-repo-name` with your actual GitHub repository information before using this README.
