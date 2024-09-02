# Docker-App-Demo
 This repository is for learning purpose GOlan application and docker. 
 # Just clone and run the following commands
 ## Build a golan image 
 docker build -t mygo:v1 .
 ## Run Golan container with golan image 
 docker run -itd --name gocon -p 8080:8080 mygo:v1 
