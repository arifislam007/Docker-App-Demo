# Dockerized Java Application with Persistent Storage

This repository contains a simple Java application packaged with Docker, featuring persistent storage.

## Table of Contents

- [Introduction](#introduction)
- [Prerequisites](#prerequisites)
- [Setup Instructions](#setup-instructions)
  - [1. Clone the Repository](#1-clone-the-repository)
  - [2. Build the Docker Image](#2-build-the-docker-image)
  - [3. Run the Container](#3-run-the-container)
- [Persistent Storage](#persistent-storage)
- [Accessing the Application](#accessing-the-application)
- [Stopping the Application](#stopping-the-application)
- [Cleanup](#cleanup)
- [License](#license)

## Introduction

This project demonstrates how to deploy a simple Java application using Docker, with a focus on persistent storage. The Java app writes logs to a file, and these logs are stored outside the Docker container on the host system, ensuring data persistence even when the container is stopped or removed.

## Prerequisites

Before you start, ensure you have Docker installed:

- [Docker](https://www.docker.com/)

## Setup Instructions

### 1. Clone the Repository

First, clone the repository to your local machine:

```bash
git clone https://github.com/yourusername/java-docker-persistent-storage.git
cd java-docker-persistent-storage
```
### 2. Build the Docker Image
```bash
docker build -t java-img .
```

### 3. Run the Container
```bash
docker run -itd --name java-app -p 8080:8080 java-img
```

# Accessing the Server
Once the container is running, you can access the server by navigating to:

```
http://Your_docker_host_ip:4000
```
