# Use the official OpenJDK image as the base image
FROM openjdk:11-jre-slim

# Set the working directory in the container
WORKDIR /app

# Copy the compiled Java class into the container
COPY app.java .

# Compile the Java application
RUN javac app.java

# Create a directory for persistent storage
RUN mkdir -p /data

# Specify the command to run the Java application
CMD ["java", "app"]
