# Assignment 3: Docker Compose

This project is an imporovement of assignment 2. We are using docker compose in this one

## Prerequisites

- Docker installed on your machine

## Setup Instructions

1. Run using docker compose 
   ```sh
   docker compose up

## Improvements over assignment 2

### Network address translation in nginx.conf 
The name of the service for backend is `webserver`. Used this in nginx.conf to redirect traffic from one container to another.

### Removed network of assignment 2
I had added both containers in 1 network in assignment 2 to redirect traffic. There was no need to create a network as docker compose creates a defaul network already. 



