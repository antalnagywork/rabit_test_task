# RabIT Test Task Project

This project is a simple PHP application, which aims the following:
- use URL mapping (.htaccess rewrite)
- use MVC pattern
- be object-oriented
- use MySQL database

## Features

- Home Page: Displays welcoming message, and enables navigation
- Users Page: lists users
- Advertisements Page: lists advertisements and the related usernames


## Screenshots

### Home Page
![Home Page Screenshot](/documentation/home_page.png?raw=true "Home Page Screenshot")

### Users Page
![Users Page Screenshot](/documentation/users_page.png?raw=true "Users Page Screenshot")

### Advertisements Page
![Advertisements Page Screenshot](/documentation/advertisements_page.png?raw=true "Advertisements Page Screenshot")

## Installation

### Prerequisites

- Docker
- Docker Compose

### Steps

1. Clone the repository
2. Build and start the Docker containers: `docker-compose up --build`
3. DB objects and test data is loaded automatically
4. Open a browser at `http://localhost:8080`

## Usage
- Home Page: `http://localhost:8080/`
- Users Page: `http://localhost:8080/users`
- Advertisements Page: `http://localhost:8080/advertisements`

## Configuration
Database configuration can be done via environment variables in the `docker-compose.yml` file.



