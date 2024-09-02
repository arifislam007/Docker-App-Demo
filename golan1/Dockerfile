FROM golang:1.21-bookworm as builder
WORKDIR /app
COPY . .
RUN go mod download
RUN CGO_ENABLED=0 GOOS=linux GOARCH=amd64 go build -o server
EXPOSE 8080
CMD ["./server"]
