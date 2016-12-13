blog
====

A Symfony project created on October 8, 2016, 7:54 pm.
This is an api to register user information(profile) and give us all information that can have a user and we can use to make publicity or another function related to it.

# Features to implement
## Home Page
Shows the list of endpoints availables in the api
## Login
Get the token to use in the request headers
## End Points
### /user
This enpoint gives us all users basic information
### /user/userId
This endpoint gives us all information of a user
### /register
Registers a user in the system
### /login
Gives us the token to manage users in the system
### /logout
Close the session created for the user.

## Prerequisites
* Composer
* php

## Clone && run project
 * git clone ...
 * cd my_project_name/
 * composer install
 * php bin/console server:run
 * go to http://localhost:8000/config.php

## Development tools and scripts
* Twig php templating
* php bin/console generate:bundle
* php bin/console generate:controller

## Components developed
* ProjectBundle
* ProjectController
* one and two actions

## Available Resources
* /
* /one
* /two

