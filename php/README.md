# Docker-App-Demo
 This repository is for learning purpose PHP application and docker. 
 # Just clone and run Following command 
 ## Build php image with docker file 
 docker build -t myphp:v1 .
 
 ## Run php container with php image 
 docker run -itd --name phpcon -p 8080:80 myphp:v1
