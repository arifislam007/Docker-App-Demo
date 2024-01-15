# Docker Python containerization with basic python app.
## This repository is for learning purpose python application and docker. 
 ## Just clone and run the following command 
### build python image with dockerfile and app.py
docker build -t mypyhon .
### Run python container with python image 
docker run -itd --name pycon -p 8084:8080 mypython