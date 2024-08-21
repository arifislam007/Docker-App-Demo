# Python HTTP Server with Docker

This project demonstrates how to set up a basic Python HTTP server inside a Docker container. The server listens on port 8080 and responds with a custom ASCII art message.

## Project Structure

- **Dockerfile**: Defines the Docker image configuration.
- **app.py**: A simple Python script that creates an HTTP server with a custom response.

## Getting Started

Follow the steps below to build and run the Docker container.

### Prerequisites

- Docker installed on your machine.
- Basic knowledge of Docker and Python.

### Project Files

- **Dockerfile**:
  ```dockerfile
  FROM python:3.8-alpine
  RUN mkdir /app
  ADD . /app
  WORKDIR /app
  EXPOSE 8080
  CMD ["python3", "app.py"]
  ```

- **app.py**:
  ```python
  from http.server import BaseHTTPRequestHandler, HTTPServer

  class MyHandler(BaseHTTPRequestHandler):
      def do_GET(self):
          self.send_response(200)
          self.send_header('Content-type', 'text/plain')
          self.end_headers()
          self.wfile.write(b'''
            ##         .
      ## ## ##        ==
   ## ## ## ## ##    ===
  /"""""""""""""""""\___/ ===
  {                       /  ===-
  \______ O           __/
   \    \         __/
    \____\_______/


  Hello from Docker!
  ''')

  def run():
      print('Starting server...')
      server_address = ('0.0.0.0', 8080)  # Change here to expose on all available network interfaces
      httpd = HTTPServer(server_address, MyHandler)
      print(f'Server started on port {server_address[1]}!')
      httpd.serve_forever()

  if __name__ == '__main__':
      run()
  ```

### Building the Docker Image

1. Clone this repository to your local machine:

   ```sh
   git clone https://github.com/arifislam007/Docker-App-Demo.git
   cd Docker-App-Demo/python
   ```

2. Build the Docker image using the Dockerfile provided:

   ```sh
   docker build -t python-http-server .
   ```

### Running the Container

After building the image, you can run it with the following command:

```sh
docker run -p 8080:8080 python-http-server
```

This will start the Python HTTP server inside a Docker container, mapping port 8080 on your host to port 8080 in the container.

### Accessing the Server

Once the container is running, you can access the server by navigating to:

```
http://your_docker_host_IP:8080
```

You should see the custom ASCII art and the message "Hello from Docker!" displayed in your browser.

## Conclusion

This project provides a simple example of how to run a Python HTTP server inside a Docker container. Feel free to customize and extend this setup according to your project needs.

---
