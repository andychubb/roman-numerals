## Roman Numeral Converter Laravel 

This is a basic example web application for a Roman Numeral Convertor built in Laravel 11, with some front end components built using Vue. 

## Setup

This application comes with a Docker container which is configured for running the app locally. There is a docker-compose file attached which will setup all the Docker containers needed to run this application. Ensure you have Docker desktop or other Docker instance running to use this.

It's a simple LEMP stack type setup, so in order to start the application run:

`docker-compose up nginx -d`

This will start the nginx container up in daemon mode and will in turn start up the containers for php and mysql. You should have three running containers. To bring down the containers simply run:

`docker-compose down`

## Installing packages

I have created a docker container that you can run to install all the composer packages, simply run the following to start the composer install, on completion the Docker composer instance will be removed

`docker-compose run --rm composer install`

## Front End Build

There are a couple of simple Vue component that need to be build. I have also included an npm container which can be used to build this.

To install all the packages in the package.json file, simply run:

`docker-compose run --rm npm install`

Then to build the application simply run

`docker-compose run --rm npm run build`

## Viewing the application

You should be able to access the application on **http://localhost** (*note no SSL has been setup as this is just a demo app*)

## Testing

Again, I have set up separate Docker instances to run the PHPUnit tests if you wish to run them from here. You can either run 

`docker-compose run --rm phpunit`
or
`docker-compose run --rm artisan test`
