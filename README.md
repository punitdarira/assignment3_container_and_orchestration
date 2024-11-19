# Assignment 3: Docker Compose

This project is an imporovement of assignment 2. We are using docker compose in this one

## Prerequisites

- Docker installed on your machine

## Setup Instructions

1. Run using docker compose 
   ```sh
   docker compose up

## Improvements over assignment 2

### 1. Network address translation in nginx.conf 
The name of the service for backend is `webserver`. Used this in nginx.conf to redirect traffic from one container to another.

### 2. Removed network of assignment 2
I had added both containers in 1 network in assignment 2 to redirect traffic. There was no need to create a network as docker compose creates a defaul network already. 

### 3. Removed port forwarding for webserver
Since we are using webserver only through the loadbalancer, I've removed the ports section for the webserver in docker compose. 




