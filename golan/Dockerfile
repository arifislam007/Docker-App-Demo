FROM golang:1.21 as builder
WORKDIR /app
COPY go.* ./
RUN go mod download
COPY . ./
RUN go build -v -o server
EXPOSE 8080
CMD ["/app/server"]
