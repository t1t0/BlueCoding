# BlueCoding
 
# Instructions 

## Requirements
- Composer installed
- Nodejs installed
- NPM installed

## Github
Clone or download the repository

## Setup 
Enter in the app folder and rename the file .env.example to .env

To install laravel dependencies run
```bash
composer install or composer update
```
For the front end dependencies
```bash
npm install
```
##Users
You can start making search right away or you can register and use some of the features of the app

##Software Description
This is a software made with Laravel Framework 5.8, for database it use SQLite wich is the best for portability (use less requirements and is easy to deploy). 
For the user database, the app use the standar auth command from laravel wich create all the necessary assets to have an authentication system working correctly.
In the Search Gif script it use a third party extension call Romeroqe\Giphy.
For the front end it use UIkit V3 as a css framework and some Vue components for some functionalities, i am gonna increase the number of vue components in the refactoring process.

##yet to implement
- Adding Favorite script
- Short link share feature
- Tests
- Refactoring
